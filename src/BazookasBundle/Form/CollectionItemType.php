<?php

namespace BazookasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CollectionItemType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titleNL')
            ->add('titleFR')
            ->add('descriptionNL')
            ->add('descriptionFR')
            ->add('imageURL')
            ->add('categoryID')
            ->add('year')
            ->add('type')
            ->add('mustShowDate')
            ->add('positionX')
            ->add('positionY')
            ->add('yearFrom')
            ->add('yearTill')
            ->add('columnID')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BazookasBundle\Entity\CollectionItem'
        ));
    }
}
