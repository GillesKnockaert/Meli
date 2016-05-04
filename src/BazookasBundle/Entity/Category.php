<?php

namespace BazookasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Category
 *
 * @ORM\Table(name="tblCategory")
 * @ORM\Entity(repositoryClass="BazookasBundle\Repository\CategoryRepository")
 */
class Category
{
    public function __construct() {
        $this->collectionItems = new ArrayCollection();
    }

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nameNL", type="string", length=50, nullable=true)
     */
    private $nameNL;

    /**
     * @var string
     *
     * @ORM\Column(name="nameFR", type="string", length=50, nullable=true)
     */
    private $nameFR;

    /**
     * @var string
     *
     * @ORM\Column(name="largeIcon", type="string", length=100, nullable=true)
     */
    private $largeIcon;

    /**
     * @var string
     *
     * @ORM\Column(name="smallIcon", type="string", length=100, nullable=true)
     */
    private $smallIcon;

    /**
     * @var string
     *
     * @ORM\Column(name="startColor", type="string", length=10, nullable=true)
     */
    private $startColor;

    /**
     * @var string
     *
     * @ORM\Column(name="endColor", type="string", length=10, nullable=true)
     */
    private $endColor;

    /**
     * @ORM\OneToMany(targetEntity="CollectionItem", mappedBy="category", cascade={"persist", "remove"})
     */
    private $collectionItems;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nameNL
     *
     * @param string $nameNL
     *
     * @return Category
     */
    public function setNameNL($nameNL)
    {
        $this->nameNL = $nameNL;

        return $this;
    }

    /**
     * Get nameNL
     *
     * @return string
     */
    public function getNameNL()
    {
        return $this->nameNL;
    }

    /**
     * Set nameFR
     *
     * @param string $nameFR
     *
     * @return Category
     */
    public function setNameFR($nameFR)
    {
        $this->nameFR = $nameFR;

        return $this;
    }

    /**
     * Get nameFR
     *
     * @return string
     */
    public function getNameFR()
    {
        return $this->nameFR;
    }

    /**
     * Set largeIcon
     *
     * @param string $largeIcon
     *
     * @return Category
     */
    public function setLargeIcon($largeIcon)
    {
        $this->largeIcon = $largeIcon;

        return $this;
    }

    /**
     * Get largeIcon
     *
     * @return string
     */
    public function getLargeIcon()
    {
        return $this->largeIcon;
    }

    /**
     * Set smallIcon
     *
     * @param string $smallIcon
     *
     * @return Category
     */
    public function setSmallIcon($smallIcon)
    {
        $this->smallIcon = $smallIcon;

        return $this;
    }

    /**
     * Get smallIcon
     *
     * @return string
     */
    public function getSmallIcon()
    {
        return $this->smallIcon;
    }

    /**
     * Set startColor
     *
     * @param string $startColor
     *
     * @return Category
     */
    public function setStartColor($startColor)
    {
        $this->startColor = $startColor;

        return $this;
    }

    /**
     * Get startColor
     *
     * @return string
     */
    public function getStartColor()
    {
        return $this->startColor;
    }

    /**
     * Set endColor
     *
     * @param string $endColor
     *
     * @return Category
     */
    public function setEndColor($endColor)
    {
        $this->endColor = $endColor;

        return $this;
    }

    /**
     * Get endColor
     *
     * @return string
     */
    public function getEndColor()
    {
        return $this->endColor;
    }

    public function getCollectionItems() 
    {
        return $this->collectionItems;
    }

    public function setCollectionItems($items) 
    {
        $this->collectionItems = $items;
    }

    public function addCollectionItem($item) 
    {
        $item->setCategory($this);
        $this->collectionItems->add($item);
        return $this;
    }

    public function removeCollectionItem($item) 
    {
        $item->setCategory(null);
        $this->collectionItems->removeElement($item);
        return $this;
    }
}
