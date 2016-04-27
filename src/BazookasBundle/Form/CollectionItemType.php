<?php

namespace BazookasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CollectionItemType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titleNL', TextType::class, array(
                    'label' => 'Title NL'
                ))
            ->add('titleFR', TextType::class, array(
                    'label' => 'Title FR'
                ))
            ->add('descriptionNL', TextareaType::class, array(
                    'label' => 'Description NL'
                ))
            ->add('descriptionFR', TextareaType::class, array(
                    'label' => 'Description FR'
                ))
            ->add('imageURL', TextType::class, array(
                    'label' => 'Image URL'
                ))
            ->add('categoryID', EntityType::class, array(
                    'class' => 'BazookasBundle:Category',
                    'label' => 'Category',
                    'choice_label' => 'nameNL'
                ))
            ->add('year', IntegerType::class, array(
                    'label' => 'Year'
                ))
            ->add('type', ChoiceType::class, array(
                    'choices' => array(
                            'Media' => 'media',
                            'Tijdssprong' => 'tijdssprong',
                            'Nieuwe map' => 'nieuwe_map',
                        ),
                    'label' => 'Type'
                ))
            ->add('mustShowDate', ChoiceType::class, array(
                    'choices' => array(
                            'Yes' => 1,
                            'No' => 0
                        ),
                    'label' => 'Show date?',
                    'expanded' => true,
                    'multiple' => false,
                    'data' => 1
                ))
            ->add('positionX', IntegerType::class, array(
                    'label' => 'Position X'
                ))
            ->add('positionY', IntegerType::class, array(
                    'label' => 'Position Y'
                ))
            ->add('yearFrom', IntegerType::class, array(
                    'label' => 'Year From'
                ))
            ->add('yearTill', IntegerType::class, array(
                    'label' => 'Year Till'
                ))
            ->add('columnID', IntegerType::class, array(
                    'label' => 'Column ID'
                ));

        return $builder->getForm();
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
