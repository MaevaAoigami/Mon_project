<?php

namespace Utilisateurs\UtilisateursBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UtilisateurController extends Controller
{
    public function factureAction()
    {

    	$em = $this->getDoctrine()->getManager();
        $factures = $em->getRepository('AgenceBundle:Commande')->byFacture($this->getUser());

        return $this->render('UtilisateursBundle:Default:layout/facture.html.twig', array('factures' => $factures));
    }

    public function facturePDFAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $facture = $em->getRepository('AgenceBundle:Commande')->findOneBy(array('utilisateur' => $this->getUser(),
                                                                                'valider' => 1,
                                                                                'id' => $id));
        
        if (!$facture) {
            $this->get('session')->getFlashBag()->add('error', 'Une erreur est survenue');
            return $this->redirect($this->generateUrl('facture'));
        }
        
        $this->container->get('setNewFacture')->facture($facture)->Output('Facture.pdf');
         
        $response = new Response();
        $response->headers->set('Content-type' , 'application/pdf');
        
        return $response;
        
    }
}
