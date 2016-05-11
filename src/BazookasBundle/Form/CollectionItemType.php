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
use BazookasBundle\Form\MapType;
use BazookasBundle\Form\FileUploadType;
use Doctrine\ORM\EntityManager;

class CollectionItemType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */

    private $em;

    public function __construct(EntityManager $em) {
        $this->em = $em;
    }

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
            ->add('file', FileUploadType::class, array(
                    'label' => 'Afbeelding',
                    'required' => true
                ))
            ->add('categoryID', EntityType::class, array(
                    'class' => 'BazookasBundle:Category',
                    'label' => 'Categorie',
                    'choice_label' => 'nameNL'
                ))
            ->add('year', ChoiceType::class, array(
                    'label' => 'Jaar',
                    'required' => true,
                    'choices' => array_combine(range(1930, 2000), range(1930, 2000))
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
            ->add('map', MapType::class, array(
                    'label' => 'Selecteer map',
                    'required' => false,
                    'choices' => $this->getMaps(),
                    'choice_value' => function ($choice) {
                        return $choice;
                    },
                ))
            ->add('yearFrom', ChoiceType::class, array(
                    'label' => 'Jaar van',
                    'required' => true,
                    'choices' => array_combine(range(1930, 2000), range(1930, 2000))
                ))
            ->add('yearTill', ChoiceType::class, array(
                    'label' => 'Jaar tot',
                    'required' => true,
                    'choices' => array_combine(range(1930, 2000), range(1930, 2000))
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

    private function getMaps() {
        $maps = array();
        $result = $this->em->createQueryBuilder()
                  ->select('c.imageURL, c.yearFrom, c.yearTill')
                  ->from('BazookasBundle:CollectionItem', 'c')
                  ->where('c.type = :type')
                  ->setParameter('type', "map")
                  ->getQuery()
                  ->getResult();
        
        foreach ($result as $key => $value) {
            $maps[$value['yearFrom'].' - '.$value['yearTill']] = $value['imageURL'];
        }

        return $maps;
    }
}
