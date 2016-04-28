<?php

namespace BazookasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use BazookasBundle\Form\CollectionItemType;
use BazookasBundle\Entity\CollectionItem;
use BazookasBundle\Form\MediaType;
use BazookasBundle\Entity\Media;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return new Response('Home page');
    }

    /**
     * @Route("/collectionitem/list")
     */
    public function collectionItemListAction() {
        $repository = $this->getDoctrine()->getRepository('BazookasBundle:CollectionItem');
        $collectionItems = $repository->findAll();

        return $this->render('BazookasBundle:Default:collectionList.html.twig', array('items' => $collectionItems));
    }

    /**
     * @Route("/collectionitem/add")
     */
    public function collectionItemAddAction(Request $request) {
        $collectionItemType = new CollectionItemType();
        $form = $collectionItemType->buildForm($this->createFormBuilder(), array());

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $collectionItem = new CollectionItem();
            $collectionItem = $this->setCollectionItemProperties($collectionItem, $data);

            $em = $this->getDoctrine()->getManager();
            $em->persist($collectionItem);
            $em->flush();

            return $this->redirect('/meli/collectionitem/list');
        }


        return $this->render('BazookasBundle:Default:index.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/collectionitem/edit/{id}")
     */
    public function collectionItemEditAction(Request $request, $id) {
        $item = $this->getDoctrine()->getRepository('BazookasBundle:CollectionItem')->find($id);

        $collectionItemType = new CollectionItemType();
        $form = $collectionItemType->buildForm($this->createFormBuilder(), array());

        $form = $this->fillCollectionItemForm($form, $item);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $item = $this->setCollectionItemProperties($item, $data);

            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirect('/meli/collectionitem/list');
        }


        return $this->render('BazookasBundle:Default:index.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/collectionitem/delete/{id}")
     */
    public function collectionItemDeleteAction($id) {
        $item = $this->getDoctrine()->getRepository('BazookasBundle:CollectionItem')->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($item);
        $em->flush();

        return $this->redirect('/meli/collectionitem/list');
    }

    /**
     * @Route("/media/list")
     */
    public function mediaListAction() {

    }

    public function mediaAddAction() {

    }

    public function mediaEditAction() {

    }

    public function mediaDeleteAction() {

    }

    private function setCollectionItemProperties($item, $data) {
        $item->setTitleNL($data["titleNL"]);
        $item->setTitleFR($data["titleFR"]);
        $item->setDescriptionNL($data["descriptionNL"]);
        $item->setDescriptionFR($data["descriptionFR"]);
        $item->setImageURL($data["imageURL"]);
        $item->setCategoryID($data["categoryID"]->getId());
        $item->setYear($data["year"]);
        $item->setType($data["type"]);
        $item->setMustShowDate($data["mustShowDate"]);
        $item->setPositionX($data["positionX"]);
        $item->setPositionY($data["positionY"]);
        $item->setYearFrom($data["yearFrom"]);
        $item->setYearTill($data["yearTill"]);
        $item->setColumnID($data["columnID"]);

        return $item;
    }

    private function fillCollectionItemForm($form, $item) {
        $form->get('titleNL')->setData($item->getTitleNL());
        $form->get('titleFR')->setData($item->getTitleFR());
        $form->get('descriptionNL')->setData($item->getDescriptionNL());
        $form->get('descriptionFR')->setData($item->getDescriptionFR());
        $form->get('imageURL')->setData($item->getImageURL());
        $form->get('categoryID')->setData($item->getCategoryID());
        $form->get('year')->setData($item->getYear());
        $form->get('type')->setData($item->getType());
        $form->get('mustShowDate')->setData($item->getMustShowDate());
        $form->get('positionX')->setData($item->getPositionX());
        $form->get('positionY')->setData($item->getPositionY());
        $form->get('yearFrom')->setData($item->getYearFrom());
        $form->get('yearTill')->setData($item->getYearTill());
        $form->get('columnID')->setData($item->getColumnID());

        return $form;
    }
}
