<?php

namespace Agence\AgenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EventPresentationController extends Controller
{
    public function presentationAction()
    {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $evenement = $em->getRepository('AgenceBundle:Evenements')->findAll();

        return $this->render('AgenceBundle:Default:evenements/evenements.html.twig', array('evenement' => $evenement));
    }
}