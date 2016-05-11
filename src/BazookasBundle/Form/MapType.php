<?php

namespace BazookasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class MapType extends AbstractType
{
    public function getParent()
    {
        return ChoiceType::class;
    }
} 