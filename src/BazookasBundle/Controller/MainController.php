<?php

namespace BazookasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use BazookasBundle\Form\CollectionItemType;
use BazookasBundle\Entity\CollectionItem;
use BazookasBundle\Form\MediaType;
use BazookasBundle\Entity\Media;
use Symfony\Component\HttpFoundation\Request;

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
     * @Route("/collectionitem/list", name="Collectionitem")
     */
    public function listCollectionitemAction()
    {
      // replace this example code with whatever you need
      return $this->render('default/index.html.twig', [
          'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
      ]);
    }


    /**
     * @Route("/media/list", name="Media")
     */
    public function listMediaAction()
    {
      // replace this example code with whatever you need
      return $this->render('default/index.html.twig', [
          'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
      ]);
    }


    /**
     * @Route("/collectionitem/add")
     */
    public function addCollectionitemAction(Request $request)
    {
        $collectionItemType = new CollectionItemType();
        $form = $collectionItemType->buildForm($this->createFormBuilder(), array());

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $collectionItem = new CollectionItem();
            $collectionItem->setTitleNL($data["titleNL"]);
            $collectionItem->setTitleFR($data["titleFR"]);
            $collectionItem->setDescriptionNL($data["descriptionNL"]);
            $collectionItem->setDescriptionFR($data["descriptionFR"]);
            $collectionItem->setImageURL($data["imageURL"]);
            $collectionItem->setCategoryID($data["categoryID"]->getId());
            $collectionItem->setYear($data["year"]);
            $collectionItem->setType($data["type"]);
            $collectionItem->setMustShowDate($data["mustShowDate"]);
            $collectionItem->setPositionX($data["positionX"]);
            $collectionItem->setPositionY($data["positionY"]);
            $collectionItem->setYearFrom($data["yearFrom"]);
            $collectionItem->setYearTill($data["yearTill"]);
            $collectionItem->setColumnID($data["columnID"]);

            $em = $this->getDoctrine()->getManager();
            $em->persist($collectionItem);
            $em->flush();

            var_dump('success');
            exit();
        }

        return $this->render('BazookasBundle:Default:index.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/collectionitem/edit")
     */
    public function editCollectionitemAction(Request $request)
    {
        $collectionItemType = new CollectionItemType();
        $form = $collectionItemType->buildForm($this->createFormBuilder(), array());

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $collectionItem = new CollectionItem();
            $collectionItem->setTitleNL($data["titleNL"]);
            $collectionItem->setTitleFR($data["titleFR"]);
            $collectionItem->setDescriptionNL($data["descriptionNL"]);
            $collectionItem->setDescriptionFR($data["descriptionFR"]);
            $collectionItem->setImageURL($data["imageURL"]);
            $collectionItem->setCategoryID($data["categoryID"]->getId());
            $collectionItem->setYear($data["year"]);
            $collectionItem->setType($data["type"]);
            $collectionItem->setMustShowDate($data["mustShowDate"]);
            $collectionItem->setPositionX($data["positionX"]);
            $collectionItem->setPositionY($data["positionY"]);
            $collectionItem->setYearFrom($data["yearFrom"]);
            $collectionItem->setYearTill($data["yearTill"]);
            $collectionItem->setColumnID($data["columnID"]);

            $em = $this->getDoctrine()->getManager();
            $em->persist($collectionItem);
            $em->flush();

            var_dump('success');
            exit();
        }

        return $this->render('BazookasBundle:Default:index.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/media/add")
     */
    public function addMediaAction()
    {
        $mediaType = new MediaType();
        $form = $mediaType->buildForm($this->createFormBuilder(), array());

        return $this->render('BazookasBundle:Default:index.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/media/edit")
     */
    public function editMediaAction()
    {
        $mediaType = new MediaType();
        $form = $mediaType->buildForm($this->createFormBuilder(), array());

        return $this->render('BazookasBundle:Default:index.html.twig', array('form' => $form->createView()));
    }

}
