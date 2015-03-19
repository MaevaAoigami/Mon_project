<?php

namespace Agence\AgenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Agence\AgenceBundle\Form\UtilisateurAdresseType;
use Agence\AgenceBundle\Entity\UtilisateurAdresse;

class PanierController extends Controller
{
    public function menuAction()
    {
        $session = $this->getRequest()->getSession();
        if (!$session->has('panier'))
            $articles = 0;
        else
            $articles = count($session->get('panier'));
        
        return $this->render('AgenceBundle:Default:modulesUsed/panier.html.twig', array('articles' => $articles));
    }

    public function supprimerAction($id)
    {

        $session = $this->getRequest()->getSession();
        $panier = $session->get('panier');

        if(array_key_exists($id, $panier));
        {
            unset($panier[$id]);
            $session->set('panier', $panier);
            $this->get('session')->getFlashBag()->add('success', 'Danseuse supprimée de votre panier avec succès.');
        }

        return $this->redirect($this->generateUrl('panier'));

    }

    public function ajouterAction($id)
    {
        $session = $this->getRequest()->getSession();
        
        if (!$session->has('panier')) $session->set('panier',array());
        $panier = $session->get('panier');
        
        if (array_key_exists($id, $panier)) {
            if ($this->getRequest()->query->get('qte') != null) $panier[$id] = $this->getRequest()->query->get('qte');
            $this->get('session')->getFlashBag()->add('success', 'Quantité modifiée avec succès.');
        } else {
            if ($this->getRequest()->query->get('qte') != null)
                $panier[$id] = $this->getRequest()->query->get('qte');
            else
                $panier[$id] = 1;

            $this->get('session')->getFlashBag()->add('success', 'Danseuse ajoutée dans votre panier avec succès.');
            
            // $this->get('session')->getFlashBag()->add('success','Article ajouté avec succès');
        }
            
        $session->set('panier',$panier);
        
        return $this->redirect($this->generateUrl('panier'));
    }
    
    public function panierAction()
    {
        $session = $this->getRequest()->getSession();
        if (!$session->has('panier')) $session->set('panier', array());
        
        /* var_dump($session->get('panier'));
        die(); */

        $em = $this->getDoctrine()->getManager();
        $danseuses = $em->getRepository('AgenceBundle:Danseuses')->findArray(array_keys($session->get('panier')));
        
        return $this->render('AgenceBundle:Default:panier/panier.html.twig', array('danseuses' => $danseuses,
                                                                                    'panier' => $session->get('panier')));
    }

    public function adresseSuppressionAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('AgenceBundle:UtilisateurAdresse')->find($id);

        if($this->container->get('security.context')->getToken()->getUser() != $entity->getUtilisateur() || !$entity) {
            return $this->redirect($this->generateUrl('livraison'));
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('livraison'));
    }

    public function livraisonAction()
    {

        $em = $this->getDoctrine()->getManager();
        $utilisateur = $this->container->get('security.context')->getToken()->getUser();
        $entity = new UtilisateurAdresse();
        $form = $this->createForm(new UtilisateurAdresseType($em), $entity);

        if ($this->get('request')->getMethod() == 'POST')
        {
            $form->handleRequest($this->getRequest());
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $entity->setUtilisateur($utilisateur);
                $em->persist($entity);
                $em->flush();
                
                return $this->redirect($this->generateUrl('livraison'));
            }
        }

        return $this->render('AgenceBundle:Default:panier/livraison.html.twig', array('utilisateur' => $utilisateur,
                                                                                      'form' => $form->createView()));
    }

    public function setLivraisonOnSession()
    {
        $session = $this->getRequest()->getSession();

        if(!$session->has('adresse')) $session->set('adresse', array());
        $adresse = $session->get('adresse');

        if($this->getRequest()->request->get('livraison') != null && $this->getRequest()->request->get('facturation') != null) {
            $adresse['livraison'] = $this->getRequest()->request->get('livraison');
            $adresse['facturation'] = $this->getRequest()->request->get('facturation');
        } else {
            return $this->redirect($this->generateUrl('validation'));
        }

        /* var_dump($adresse);
        die(); */

        $session->set('adresse', $adresse);
        return $this->redirect($this->generateUrl('validation'));
    }

    public function validationAction()
    {
        if ($this->get('request')->getMethod() == 'POST') {
            $this->setLivraisonOnSession();
        }
        
        $em = $this->getDoctrine()->getManager();
        $prepareCommande = $this->forward('AgenceBundle:Commande:prepareCommande');
        $commande = $em->getRepository('AgenceBundle:Commande')->find($prepareCommande->getContent());
        
        /* var_dump($commande);
        die(); */

        return $this->render('AgenceBundle:Default:panier/validation.html.twig', array('commande' => $commande));
    }

}
