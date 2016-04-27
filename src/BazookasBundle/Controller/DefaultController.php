<?php

namespace BazookasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use BazookasBundle\Form\CollectionItemType;
use BazookasBundle\Entity\CollectionItem;
use BazookasBundle\Form\MediaType;
use BazookasBundle\Entity\Media;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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
    public function collectionItemAction()
    {
        $collectionItemType = new CollectionItemType();
        $form = $collectionItemType->buildForm($this->createFormBuilder(), array());

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
