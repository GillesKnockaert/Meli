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
use BazookasBundle\Repository\CollectionItemRepository;
use BazookasBundle\Form\FileUploadType;

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
                    'choice_label' => function($collectionItem) {
                        if ($collectionItem->getTitleNL() !== null) {
                            return $collectionItem->getTitleNL();
                        } else {
                            return $collectionItem->getTitleFR();
                        }
                    },
                    'query_builder' => function(CollectionItemRepository $cir) {
                        return $cir->createQueryBuilder('c')
                                   ->orderBy('c.columnID', 'ASC')
                                   ->where('c.type = :type')
                                   ->setParameter('type', "media");
                        },
                    'required' => true
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
            ->add('fileNL', FileUploadType::class, array(
                    'label' => 'Media Nederlands',
                    'required' => false,
                    'path' => $options['pathNL']
                ))
            ->add('fileFR', FileUploadType::class, array(
                    'label' => 'Media Frans',
                    'required' => false,
                    'path' => $options['pathFR']
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
