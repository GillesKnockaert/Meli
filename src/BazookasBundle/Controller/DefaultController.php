<?php

namespace BazookasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use BazookasBundle\Form\CollectionItemType;

class DefaultController extends Controller
{
    /**
     * @Route("/bb")
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
      $form = $this->createFormBuilder()
       ->add('task', TextType::class)
       ->add('dueDate', DateType::class)
       ->add('save', SubmitType::class, array('label' => 'Create Task'))
       ->getForm();


        return $this->render('BazookasBundle:Default:form.html.twig', array('form' => $form));
    }

}
