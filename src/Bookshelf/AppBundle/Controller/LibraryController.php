<?php

namespace Bookshelf\AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Bookshelf\AppBundle\Entity\Library;
use Bookshelf\AppBundle\Form\LibraryType;

/**
 * Library controller.
 *
 * @Route("/library")
 */
class LibraryController extends Controller
{

    /**
     * Lists all Library entities.
     *
     * @Route("/", name="library")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BookshelfAppBundle:Library')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Library entity.
     *
     * @Route("/", name="library_create")
     * @Method("POST")
     * @Template("BookshelfAppBundle:Library:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Library();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('library_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Library entity.
     *
     * @param Library $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Library $entity)
    {
        $form = $this->createForm(new LibraryType(), $entity, array(
            'action' => $this->generateUrl('library_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Library entity.
     *
     * @Route("/new", name="library_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Library();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Library entity.
     *
     * @Route("/{id}", name="library_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BookshelfAppBundle:Library')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Library entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Library entity.
     *
     * @Route("/{id}/edit", name="library_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BookshelfAppBundle:Library')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Library entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Library entity.
    *
    * @param Library $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Library $entity)
    {
        $form = $this->createForm(new LibraryType(), $entity, array(
            'action' => $this->generateUrl('library_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Library entity.
     *
     * @Route("/{id}", name="library_update")
     * @Method("PUT")
     * @Template("BookshelfAppBundle:Library:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BookshelfAppBundle:Library')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Library entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('library_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Library entity.
     *
     * @Route("/{id}", name="library_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BookshelfAppBundle:Library')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Library entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('library'));
    }

    /**
     * Creates a form to delete a Library entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('library_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
