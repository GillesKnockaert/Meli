<?php

namespace BazookasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use BazookasBundle\Form\CollectionItemType;
use BazookasBundle\Entity\CollectionItem;
use BazookasBundle\Form\MediaType;
use BazookasBundle\Entity\Media;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class MainController extends Controller
{
    /**
     * @Route("/", name="Home")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        return $this->render('BazookasBundle:Default:home.html.twig');
    }


    /**
     * @Route("/collectionitem/list/{columns}", defaults={"columns" = 0}, name="Collectionitem")
     */
    public function collectionItemListAction($columns) {
        if ($columns == 0) {
            $columns = intval($this->getNumberOfColumns());
        }

        $repository = $this->getDoctrine()->getRepository('BazookasBundle:CollectionItem');
        $collectionItems = $repository->findAll();

        return $this->render('BazookasBundle:Default:collectionList.html.twig', 
          array('columns' => $columns, 'items' => $collectionItems));
    }


    /**
     * @Route("/collectionitem/add/{column}")
     */
    public function collectionItemAddAction(Request $request, $column) {
        $collectionItemType = new CollectionItemType();
        $form = $collectionItemType->buildForm($this->createFormBuilder(), array());

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $collectionItem = new CollectionItem();
            $collectionItem = $this->setCollectionItemProperties($collectionItem, $data, $column);

            $collectionItem->uploadImage();

            $em = $this->getDoctrine()->getManager();
            $em->persist($collectionItem);
            $em->flush();

            return $this->redirect('/meli/collectionitem/list');
        }
        return $this->render('BazookasBundle:Default:form.html.twig', 
          array('title' => 'Nieuw item in kolom '.$column ,'form' => $form->createView()));
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

            $item = $this->setCollectionItemProperties($item, $data, $item->getColumnID());
            $item->uploadImage();

            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirect('/meli/collectionitem/list');
        }
        return $this->render('BazookasBundle:Default:form.html.twig', 
          array('title' => 'Pas item aan' ,'form' => $form->createView()));
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
    * @Route("/timejump/add")
    */
    public function timejumpAddAction(Request $request) {
        $collectionItem = new CollectionItem();
        $form = $this->createFormBuilder($collectionItem)
                     ->add('yearFrom', IntegerType::class, array(
                          'label' => 'Jaar van',
                          'required' => true,
                          'attr' => array('min' => 0)
                      ))
                     ->add('yearTill', IntegerType::class, array(
                          'label' => 'Jaar tot',
                          'required' => true
                      ))
                     ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $collectionItem->setType('tijdssprong');
            $collectionItem->setColumnID(intval($this->getNumberOfColumns()) + 1);

            $em = $this->getDoctrine()->getManager();
            $em->persist($collectionItem);
            $em->flush();

            return $this->redirect('/meli/collectionitem/list');
        }
        return $this->render('BazookasBundle:Default:form.html.twig', 
          array('title' => 'Nieuwe tijdssprong' ,'form' => $form->createView()));
    }

    /**
    * @Route("/timejump/edit/{id}")
    */
    public function timejumpEditAction(Request $request, $id) {

    }

    /**
    * @Route("/timejump/delete/{id}")
    */
    public function timejumpDeleteAction($id) {

    }

    /**
     * @Route("/media/list", name="Media")
     */
    public function mediaListAction()
    {
        $repository = $this->getDoctrine()->getRepository('BazookasBundle:Media');
        $mediaItems = $repository->findAll();

        return $this->render('BazookasBundle:Default:mediaList.html.twig', array('items' => $mediaItems));
    }

    /**
     * @Route("/media/add")
     */
    public function mediaAddAction(Request $request)
    {
        $mediaType = new MediaType();
        $form = $mediaType->buildForm($this->createFormBuilder(), array());

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $media = new Media();
            $media = $this->setMediaProperties($media, $data);

            $em = $this->getDoctrine()->getManager();
            $em->persist($media);
            $em->flush();

            return $this->redirect('/meli/media/list');
        }
        return $this->render('BazookasBundle:Default:form.html.twig', array('title' => 'New media' ,'form' => $form->createView()));
    }

    /**
     * @Route("/media/edit/{id}")
     */
    public function mediaEditAction()
    {
        $mediaType = new MediaType();
        $form = $mediaType->buildForm($this->createFormBuilder(), array());

        return $this->render('BazookasBundle:Default:form.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/media/delete/{id}")
     */
    public function mediaDeleteAction() {

    }

    private function getNumberOfColumns() {
      $em = $this->getDoctrine()->getManager();
      return $em->createQueryBuilder()
                ->select('MAX(c.columnID)')
                ->from('BazookasBundle:CollectionItem', 'c')
                ->getQuery()
                ->getSingleScalarResult();
    }

    private function setCollectionItemProperties($item, $data, $column = null) {
        $item->setTitleNL($data["titleNL"]);
        $item->setTitleFR($data["titleFR"]);
        $item->setDescriptionNL($data["descriptionNL"]);
        $item->setDescriptionFR($data["descriptionFR"]);
        $item->setFile($data["file"]);
        $item->setCategoryID($data["categoryID"]->getId());
        $item->setYear($data["year"]);
        $item->setType('media');
        $item->setMustShowDate($data["mustShowDate"]);
        $item->setPositionX($data["positionX"]);
        $item->setPositionY($data["positionY"]);
        $item->setYearFrom($data["yearFrom"]);
        $item->setYearTill($data["yearTill"]);
        $item->setColumnID($column);

        return $item;
    }

    private function setMediaProperties($media, $data) {
        $media->setTitleNL($data["titleNL"]);
        $media->setTitleFR($data["titleFR"]);
        $media->setDescriptionNL($data["descriptionNL"]);
        $media->setDescriptionFR($data["descriptionFR"]);
        $media->setType($data["type"]);
        $media->setContentURLNL($data["contentURLNL"]);
        $media->setContentURLFR($data["contentURLFR"]);
        $media->setCollectionID($data["collectionID"]->getId());

        return $media;
    }

    private function fillCollectionItemForm($form, $item) {
        $form->get('titleNL')->setData($item->getTitleNL());
        $form->get('titleFR')->setData($item->getTitleFR());
        $form->get('descriptionNL')->setData($item->getDescriptionNL());
        $form->get('descriptionFR')->setData($item->getDescriptionFR());
        $form->get('categoryID')->setData($item->getCategoryID());
        $form->get('year')->setData($item->getYear());
        $form->get('mustShowDate')->setData($item->getMustShowDate());
        $form->get('positionX')->setData($item->getPositionX());
        $form->get('positionY')->setData($item->getPositionY());
        $form->get('yearFrom')->setData($item->getYearFrom());
        $form->get('yearTill')->setData($item->getYearTill());

        return $form;
    }
}
