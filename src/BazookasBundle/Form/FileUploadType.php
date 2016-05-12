<?php

namespace BazookasBundle\Form;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface; 
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;

class FileUploadType extends AbstractType
{
	public function configureOptions(OptionsResolver $resolver) 
    {                                                                     
        $resolver->setDefaults(array(                                     
            'path' => ''                               
        ));                                                               
    } 

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setAttribute('path', $options['path']);
    }

	public function buildView(FormView $view, FormInterface $form, array $options)
    {
        parent::buildView($view, $form, $options);

        $view->vars['path'] = $options['path'];
    }

    public function getParent()
    {
        return FileType::class;
    }
} 