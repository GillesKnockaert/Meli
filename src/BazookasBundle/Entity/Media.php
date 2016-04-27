<?php

namespace BazookasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Media
 *
 * @ORM\Table(name="media")
 * @ORM\Entity(repositoryClass="BazookasBundle\Repository\MediaRepository")
 */
class Media
{
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
     * @ORM\Column(name="titleNL", type="string", length=50, nullable=true)
     */
    private $titleNL;

    /**
     * @var string
     *
     * @ORM\Column(name="titleFR", type="string", length=50, nullable=true)
     */
    private $titleFR;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionNL", type="string", length=250, nullable=true)
     */
    private $descriptionNL;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionFR", type="string", length=250, nullable=true)
     */
    private $descriptionFR;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="contentURLNL", type="string", length=100, nullable=true)
     */
    private $contentURLNL;

    /**
     * @var string
     *
     * @ORM\Column(name="contentURLFR", type="string", length=100, nullable=true)
     */
    private $contentURLFR;

    /**
     * @var int
     *
     * @ORM\Column(name="collectionID", type="integer")
     * @ORM\ManyToOne(targetEntity="CollectionItem", inversedBy="id")
     */
    private $collectionID;


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
     * Set titleNL
     *
     * @param string $titleNL
     *
     * @return Media
     */
    public function setTitleNL($titleNL)
    {
        $this->titleNL = $titleNL;

        return $this;
    }

    /**
     * Get titleNL
     *
     * @return string
     */
    public function getTitleNL()
    {
        return $this->titleNL;
    }

    /**
     * Set titleFR
     *
     * @param string $titleFR
     *
     * @return Media
     */
    public function setTitleFR($titleFR)
    {
        $this->titleFR = $titleFR;

        return $this;
    }

    /**
     * Get titleFR
     *
     * @return string
     */
    public function getTitleFR()
    {
        return $this->titleFR;
    }

    /**
     * Set descriptionNL
     *
     * @param string $descriptionNL
     *
     * @return Media
     */
    public function setDescriptionNL($descriptionNL)
    {
        $this->descriptionNL = $descriptionNL;

        return $this;
    }

    /**
     * Get descriptionNL
     *
     * @return string
     */
    public function getDescriptionNL()
    {
        return $this->descriptionNL;
    }

    /**
     * Set descriptionFR
     *
     * @param string $descriptionFR
     *
     * @return Media
     */
    public function setDescriptionFR($descriptionFR)
    {
        $this->descriptionFR = $descriptionFR;

        return $this;
    }

    /**
     * Get descriptionFR
     *
     * @return string
     */
    public function getDescriptionFR()
    {
        return $this->descriptionFR;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Media
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set contentURLNL
     *
     * @param string $contentURLNL
     *
     * @return Media
     */
    public function setContentURLNL($contentURLNL)
    {
        $this->contentURLNL = $contentURLNL;

        return $this;
    }

    /**
     * Get contentURLNL
     *
     * @return string
     */
    public function getContentURLNL()
    {
        return $this->contentURLNL;
    }

    /**
     * Set contentURLFR
     *
     * @param string $contentURLFR
     *
     * @return Media
     */
    public function setContentURLFR($contentURLFR)
    {
        $this->contentURLFR = $contentURLFR;

        return $this;
    }

    /**
     * Get contentURLFR
     *
     * @return string
     */
    public function getContentURLFR()
    {
        return $this->contentURLFR;
    }

    /**
     * Set collectionID
     *
     * @param integer $collectionID
     *
     * @return Media
     */
    public function setCollectionID($collectionID)
    {
        $this->collectionID = $collectionID;

        return $this;
    }

    /**
     * Get collectionID
     *
     * @return int
     */
    public function getCollectionID()
    {
        return $this->collectionID;
    }
}
