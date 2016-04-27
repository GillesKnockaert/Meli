<?php

namespace BazookasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
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
        return $this->render('BazookasBundle:Default:index.html.twig');
    }


    /**
     * @Route("/collectionitem")
     */
    public function collectionItemAction(Request $request)
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

            return $this->redirect('media');
        }


        return $this->render('BazookasBundle:Default:index.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/media")
     */
    public function mediaAction()
    {
        $mediaType = new MediaType();
        $form = $mediaType->buildForm($this->createFormBuilder(), array());

        return $this->render('BazookasBundle:Default:index.html.twig', array('form' => $form->createView()));
    }

}
