<?php

namespace Agence\AgenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PresentationController extends Controller
{
    public function presentationAction($id)
    {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $danseuse = $em->getRepository('AgenceBundle:Danseuses')->find($id);
        
        if (!$danseuse) throw $this->createNotFoundException('La page n\'existe pas.');
        
        if ($session->has('panier'))
            $panier = $session->get('panier');
        else
            $panier = false;
        
        return $this->render('AgenceBundle:Default:produits/layout/presentation.html.twig', array('danseuse' => $danseuse,
                                                                                                  'panier' => $panier));
    }
}