<?php

namespace Agence\AgenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Agance\AgenceBundle\Entity\UtilisateurAdresse;
use Agence\AgenceBundle\Entity\Commande;
use Agence\AgenceBundle\Entity\Danseuses;

class CommandeController extends Controller
{
    public function facture()
    {
        $em = $this->getDoctrine()->getManager();
        $generator = $this->container->get('security.secure_random');
        $session = $this->getRequest()->getSession();
        $adresse = $session->get('adresse');
        $panier = $session->get('panier');
        $commande = array();
        $totalHT = 0;
        $totalTVA = 0;
        
        $facturation = $em->getRepository('AgenceBundle:UtilisateurAdresse')->find($adresse['facturation']);
        $livraison = $em->getRepository('AgenceBundle:UtilisateurAdresse')->find($adresse['livraison']);
        $danseuses = $em->getRepository('AgenceBundle:Danseuses')->findArray(array_keys($session->get('panier')));
        
        foreach($danseuses as $danseuse)
        {
            $prixHT = ($danseuse->getPrix() * $panier[$danseuse->getId()]);
            $prixTTC = ($danseuse->getPrix() * $panier[$danseuse->getId()] / $danseuse->getTva()->getMultiplicate());
            $totalHT += $prixHT;
            
            if (!isset($commande['tva']['%'.$danseuse->getTva()->getValeur()]))
                $commande['tva']['%'.$danseuse->getTva()->getValeur()] = round($prixTTC - $prixHT,2);
            else
                $commande['tva']['%'.$danseuse->getTva()->getValeur()] += round($prixTTC - $prixHT,2);
            
            $totalTVA += round($prixTTC - $prixHT,2);
            
            $commande['danseuse'][$danseuse->getId()] = array('reference' => $danseuse->getNom(),
                                                            'quantite' => $panier[$danseuse->getId()],
                                                            'prixHT' => round($danseuse->getPrix(),2),
                                                            'prixTTC' => round($danseuse->getPrix() / $danseuse->getTva()->getMultiplicate(),2));
        }  
        
        $commande['livraison'] = array('prenom' => $livraison->getPrenom(),
                                    'nom' => $livraison->getNom(),
                                    'telephone' => $livraison->getTelephone(),
                                    'adresse' => $livraison->getAdresse(),
                                    'cp' => $livraison->getCp(),
                                    'ville' => $livraison->getVille(),
                                    'pays' => $livraison->getPays());

        $commande['facturation'] = array('prenom' => $facturation->getPrenom(),
                                    'nom' => $facturation->getNom(),
                                    'telephone' => $facturation->getTelephone(),
                                    'adresse' => $facturation->getAdresse(),
                                    'cp' => $facturation->getCp(),
                                    'ville' => $facturation->getVille(),
                                    'pays' => $facturation->getPays());

        $commande['prixHT'] = round($totalHT,2);
        $commande['prixTTC'] = round($totalHT + $totalTVA,2);
        $commande['token'] = bin2hex($generator->nextBytes(20));

        return $commande;
    }
    
    public function prepareCommandeAction()
    {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        
        if (!$session->has('commande'))
            $commande = new Commande();
        else
            $commande = $em->getRepository('AgenceBundle:Commande')->find($session->get('commande'));
        
        $commande->setDate(new \DateTime());
        $commande->setUtilisateur($this->container->get('security.context')->getToken()->getUser());
        $commande->setValider(0);
        $commande->setReference(0);
        $commande->setCommande($this->facture());
        
        if (!$session->has('commande')) {
            $em->persist($commande);
            $session->set('commande',$commande);
        }
        
        $em->flush();
        
        return new Response($commande->getId());
    }

    /*
     * Cette méthode remplace l'API banque
     */
    public function validationCommandeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository('AgenceBundle:Commande')->find($id);

        if(!$commande || $commande->getValider() == 1) {
            throw $this->createNotFoundException('La commande n\'existe pas.');
        }

        $commande->setValider(1);
        $commande->setReference($this->container->get('setNewReference')->reference()); // Service
        $em->flush();

        $session = $this->getRequest()->getSession();
        $session->remove('adresse');
        $session->remove('panier');
        $session->remove('panier');

        $this->get('session')->getFlashBag()->add('success', 'Votre commande est validée avec succès.');
        return $this->redirect($this->generateUrl('facture'));
    }
}
