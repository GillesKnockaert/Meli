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

class MediaType extends AbstractType
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
            ->add('type', ChoiceType::class, array(
                    'choices' => array(
                            'Audio' => 'audio',
                            'Video' => 'video',
                            'Tekst' => 'tekst',
                        ),
                    'label' => 'Type'
                ))
            ->add('contentURLNL', TextType::class, array(
                    'label' => 'Content url NL'
                ))
            ->add('contentURLFR', TextType::class, array(
                    'label' => 'Content url FR'
                ))
            //->add('collectionID')
        ;
        return $builder->getForm();
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BazookasBundle\Entity\Media'
        ));
    }
}
