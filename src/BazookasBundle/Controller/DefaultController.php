<?php

namespace BazookasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use BazookasBundle\Form\CollectionItemType;
use BazookasBundle\Entity\CollectionItem;
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
     * @Route("/meliform")
     */
    public function newAction()
    {
        $collectionItemType = new CollectionItemType();
        $form = $collectionItemType->buildForm($this->createFormBuilder(), array());

        return $this->render('BazookasBundle:Default:form.html.twig', array('form' => $form->createView()));
    }

}
