<?php

namespace BazookasBundle\Form;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface; 
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;

class MapType extends AbstractType
{
	public function configureOptions(OptionsResolver $resolver) 
    {                                                                     
        $resolver->setDefaults(array(                                     
            'posX' => 0,
            'posY' => 0,
            'yearFrom' => 0                                     
        ));                                                               
    } 

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setAttribute('posX', $options['posX'])
            ->setAttribute('posY', $options['posY'])
            ->setAttribute('yearFrom', $options['yearFrom']);
    }

	public function buildView(FormView $view, FormInterface $form, array $options)
    {
        parent::buildView($view, $form, $options);

        $view->vars['posX'] = $options['posX'];
        $view->vars['posY'] = $options['posY'];
        $view->vars['yearFrom'] = $options['yearFrom'];
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
} 