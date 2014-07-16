<?php

namespace Bookshelf\AppBundle\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Bookshelf\AppBundle\Entity\Book;
use Bookshelf\AppBundle\Form\BookType;
use Symfony\Component\HttpFoundation\Response;

/**
 * Book controller.
 *
 */
class BookController extends Controller
{

    /**
     * Lists all Book entities.
     *
     * @Route("/book", name="book")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $filter = [];
        if ($request->get('libraryId')) {
            $filter['library'] = $request->get('libraryId');
            $entities = $em->getRepository('BookshelfAppBundle:Book')->findBy($filter);
        } else {
            $entities = [];
        }

        $serializer = $this->get('serializer');

        return new Response($serializer->serialize(['data' => $entities], 'json'), Response::HTTP_OK, [
            'Content-Type' => 'application/json'
        ]);
    }
    /**
     * Creates a new Book entity.
     *
     * @Route("/book", name="book_create")
     * @Method("POST")
     * @Template("BookshelfAppBundle:Book:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Book();
        $form = $this->createCreateForm($entity);
        $data = $_POST;
        unset($data['id']);
        $form->submit($data);

        if ($request->isMethod('POST') && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return new JsonResponse(['id' => $entity->getId()]);
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Book entity.
     *
     * @param Book $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Book $entity)
    {
        $form = $this->createForm(new BookType(), $entity, array(
            'action' => $this->generateUrl('book_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Finds and displays a Book entity.
     *
     * @Route("/book/{id}", name="book_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BookshelfAppBundle:Book')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Book entity.');
        }

        return array(
            'entity'      => $entity,
        );
    }

    /**
    * Creates a form to edit a Book entity.
    *
    * @param Book $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Book $entity)
    {
        $form = $this->createForm(new BookType(), $entity, array(
            'action' => $this->generateUrl('book_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Book entity.
     *
     * @Route("/book/{id}/update", name="book_update")
     * @Method("POST")
     * @Template("BookshelfAppBundle:Book:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BookshelfAppBundle:Book')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Book entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->submit($_POST);

        if ($editForm->isValid()) {
            $em->flush();

            return new JsonResponse(['id' => $id]);
        }

        return new JsonResponse(['id' => $id]);
    }
    /**
     * Deletes a Book entity.
     *
     * @Route("/book/{id}/delete", name="book_delete")
     * @Method("POST")
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('BookshelfAppBundle:Book')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Book entity.');
        }

        $em->remove($entity);
        $em->flush();

        return new Response();
    }
}
