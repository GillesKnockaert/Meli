<?php

namespace BazookasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
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
                    'label' => 'Titel Nederlands',
                    'required' => false
                ))
            ->add('titleFR', TextType::class, array(
                    'label' => 'Titel Frans',
                    'required' => false
                ))
            ->add('descriptionNL', TextareaType::class, array(
                    'label' => 'Beschrijving Nederlands',
                    'required' => false
                ))
            ->add('descriptionFR', TextareaType::class, array(
                    'label' => 'Beschrijving Frans',
                    'required' => false
                ))
            ->add('file', FileType::class, array(
                    'label' => 'Afbeelding',
                    'required' => false
                ))
            ->add('categoryID', EntityType::class, array(
                    'class' => 'BazookasBundle:Category',
                    'label' => 'Categorie',
                    'choice_label' => 'nameNL'
                ))
            ->add('year', IntegerType::class, array(
                    'label' => 'Jaar',
                    'required' => false,
                    'attr' => array('min' => 0)
                ))
            ->add('mustShowDate', ChoiceType::class, array(
                    'choices' => array(
                            'Ja' => 1,
                            'Nee' => 0
                        ),
                    'label' => 'Toon datum?',
                    'expanded' => true,
                    'multiple' => false,
                    'data' => 1
                ))
            ->add('positionX', IntegerType::class, array(
                    'label' => 'Positie X',
                    'required' => false
                ))
            ->add('positionY', IntegerType::class, array(
                    'label' => 'Positie Y',
                    'required' => false
                ))
            ->add('yearFrom', IntegerType::class, array(
                    'label' => 'Jaar van',
                    'required' => false,
                    'data' => 1950,
                    'attr' => array('min' => 1930, 'max' => 2000)
                ))
            ->add('yearTill', IntegerType::class, array(
                    'label' => 'Jaar tot',
                    'required' => false,
                    'data' => 1980,
                    'attr' => array('min' => 1930, 'max' => 2000)
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
