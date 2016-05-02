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
use BazookasBundle\Repository\CollectionItemRepository;

class MediaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('collectionID', EntityType::class, array(
                    'class' => 'BazookasBundle:CollectionItem',
                    'label' => 'Collectie item',
                    'choice_label' => 'titleNL',
                    'query_builder' => function(CollectionItemRepository $cir) {
                        return $cir->createQueryBuilder('c')
                                   ->orderBy('c.columnID', 'ASC')
                                   ->where('c.type = :type')
                                   ->setParameter('type', "media");
                        }
                ))
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
            ->add('type', ChoiceType::class, array(
                    'choices' => array(
                            'Audio' => 'audio',
                            'Video' => 'video',
                            'Foto' => 'foto',
                        ),
                    'label' => 'Type'
                ))
            ->add('fileNL', FileType::class, array(
                    'label' => 'Media Nederlands',
                    'required' => false
                ))
            ->add('fileFR', FileType::class, array(
                    'label' => 'Media Frans',
                    'required' => false
                ));

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
