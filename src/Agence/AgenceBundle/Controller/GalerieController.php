<?php

namespace Agence\AgenceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Agence\AgenceBundle\Entity\Galerie;
use Agence\AgenceBundle\Form\GalerieType;

use Agence\AgenceBundle\Entity\Danseuses;

/**
 * Galerie controller.
 *
 */
class GalerieController extends Controller
{

    /**
     * Lists all Galerie entities.
     *
     */
    public function indexAction($danseuse_id)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AgenceBundle:Galerie')->findAll();

        return $this->render('AgenceBundle:Galerie:index.html.twig', array(
            'danseuse_id' => $danseuse_id,
            'entities' => $entities,
        ));
    }

    public function createAction(Request $request, $danseuse_id)
    {
        $danseuse = $this->getDoctrine()->getManager()->getRepository('AgenceBundle:Danseuses')->find($danseuse_id);
        
        $entity = new Galerie();
        $entity->setDanseuse($danseuse);

        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('danseuse_galerie', array('danseuse_id' => $danseuse_id)));
        }

        return $this->render('AgenceBundle:Galerie:new.html.twig', array(
            'danseuse' => $danseuse,
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Galerie entity.
     *
     * @param Galerie $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Galerie $entity)
    {
        $form = $this->createForm(new GalerieType(), $entity, array(
            'action' => $this->generateUrl('danseuse_galerie_create', array('danseuse_id' => $entity->getDanseuse()->getId())),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Ajouter'));

        return $form;
    }

    /**
     * Deletes a Galerie entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AgenceBundle:Galerie')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Galerie entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('danseuse_galerie'));
    }

    /**
     * Creates a form to delete a Galeries entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('danseuse_galerie_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}