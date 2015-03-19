<?php

namespace Agence\AgenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Agence\AgenceBundle\Entity\UtilisateurAdresse;
use Agence\AgenceBundle\Entity\Commande;
use Agence\AgenceBundle\Entity\Danseuses;

class CommandeAdminController extends Controller
{
    public function commandesAction() 
    {
        $em = $this->getDoctrine()->getManager();
        $commandes = $em->getRepository('AgenceBundle:Commande')->findAll();
        
        return $this->render('AgenceBundle:Default:commande/layout/index.html.twig', array('commandes' => $commandes));
    }
    
    public function showFactureAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $facture = $em->getRepository('AgenceBundle:Commande')->find($id);
        
        if (!$facture) {
            $this->get('session')->getFlashBag()->add('error', 'Une erreur est survenue');
            return $this->redirect($this->generateUrl('adminCommande'));
        }
        
        $this->container->get('setNewFacture')->facture($facture)->Output('Facture.pdf');
         
        $response = new Response();
        $response->headers->set('Content-type' , 'application/pdf');
        
        return $response;
    }
}
