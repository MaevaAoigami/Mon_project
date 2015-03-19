<?php

namespace Agence\AgenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Agence\AgenceBundle\Entity\Categories;

class ProduitsController extends Controller
{
    public function produitsAction(Categories $categorie = null)
    {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        
        if ($categorie != null)
            $findDanseuses = $em->getRepository('AgenceBundle:Danseuses')->byCategorie($categorie);
        else 
            $findDanseuses = $em->getRepository('AgenceBundle:Danseuses')->findBy(array('disponible' => 1));
        
        if ($session->has('panier'))
            $panier = $session->get('panier');
        else
            $panier = false;
        
        $danseuses = $this->get('knp_paginator')->paginate($findDanseuses,$this->get('request')->query->get('page', 1),6);
        
        return $this->render('AgenceBundle:Default:produits/layout/produits.html.twig', array('danseuses' => $danseuses,
                                                                                                 'panier' => $panier));
    }
    public function homeAction()
    {
        return $this->render('AgenceBundle:Default:home.html.twig');
    }
}
