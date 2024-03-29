<?php

namespace Jooks\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Jooks\AdminBundle\Entity\Place;
use Jooks\AdminBundle\Form\PlaceType;

/**
 * Place controller.
 *
 * @Route("/admin/place")
 */
class PlaceController extends Controller
{

    /**
     * Lists all Place entities.
     *
     * @Route("/", name="admin_place")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('JooksAdminBundle:Place')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Place entity.
     *
     * @Route("/", name="admin_place_create")
     * @Method("POST")
     * @Template("JooksAdminBundle:Place:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Place();
        $form = $this->createForm(new PlaceType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_place_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Place entity.
     *
     * @Route("/new", name="admin_place_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Place();
        $form   = $this->createForm(new PlaceType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Place entity.
     *
     * @Route("/{id}", name="admin_place_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('JooksAdminBundle:Place')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Place entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Place entity.
     *
     * @Route("/{id}/edit", name="admin_place_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('JooksAdminBundle:Place')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Place entity.');
        }

        $editForm = $this->createForm(new PlaceType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Place entity.
     *
     * @Route("/{id}", name="admin_place_update")
     * @Method("PUT")
     * @Template("JooksAdminBundle:Place:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('JooksAdminBundle:Place')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Place entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new PlaceType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_place_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Place entity.
     *
     * @Route("/{id}", name="admin_place_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('JooksAdminBundle:Place')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Place entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_place'));
    }

    /**
     * Creates a form to delete a Place entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
