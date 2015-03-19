<?php

namespace Agence\AgenceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Agence\AgenceBundle\Entity\Contact;
use Agence\AgenceBundle\Form\ContactType;

/**
 * Contact controller.
 *
 */
class ContactController extends Controller
{

    public function aProposAction()
    {
        return $this->render('AgenceBundle:Apropos:apropos.html.twig');
    }

	/**
     * Creates a new Contact entity.
     *
     */
    public function createAction(Request $request)
    {
        $session = $this->getRequest()->getSession();
        $entity = new Contact();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success_contact','Message envoyé avec succès.');

            return $this->redirect($this->generateUrl('contact'));
        } else {
            $this->get('session')->getFlashBag()->add('error_contact','Problème durant l\'envoi du message. Veuillez réessayer.');
        }

        return $this->render('AgenceBundle:Contact:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Contact entity.
     *
     * @param Contact $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Contact $entity)
    {
        $form = $this->createForm(new ContactType(), $entity, array(
            'action' => $this->generateUrl('contact_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Envoyer'));

        return $form;
    }

    /**
     * Displays a form to create a new Contact entity.
     *
     */
    public function newAction()
    {
        $entity = new Contact();
        $form   = $this->createCreateForm($entity);

        return $this->render('AgenceBundle:Apropos:contact.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
}