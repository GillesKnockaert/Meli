<?php

namespace BazookasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use BazookasBundle\Helper\MediaUtils;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

/**
 * CollectionItem
 *
 * @ORM\Table(name="tblCollectionItem")
 * @ORM\Entity(repositoryClass="BazookasBundle\Repository\CollectionItemRepository")
 */
class CollectionItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OneToMany(targetEntity="Media", mappedBy="collectionID", cascade={"persist", "remove"})
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
     * @ORM\Column(name="imageURL", type="string", length=100, nullable=true)
     */
    private $imageURL;

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="collectionItems")
     * @ORM\JoinColumn(name="categoryID", referencedColumnName="id")
     */
    private $category;

    /**
     * @var int
     *
     * @ORM\Column(name="year", type="integer", nullable=true)
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50)
     */
    private $type;

    /**
     * @var bool
     *
     * @ORM\Column(name="mustShowDate", type="boolean", nullable=true)
     */
    private $mustShowDate;

    /**
     * @var float
     *
     * @ORM\Column(name="positionX", type="float", nullable=true)
     */
    private $positionX;

    /**
     * @var float
     *
     * @ORM\Column(name="positionY", type="float", nullable=true)
     */
    private $positionY;

    /**
     * @var int
     *
     * @ORM\Column(name="yearFrom", type="integer", nullable=true)
     */
    private $yearFrom;

    /**
     * @var int
     *
     * @ORM\Column(name="yearTill", type="integer", nullable=true)
     */
    private $yearTill;

    /**
     * @var int
     *
     * @ORM\Column(name="columnID", type="integer")
     */
    private $columnID;

    /**
     * @Assert\File(
     *     mimeTypes = {"image/png", "image/jpeg"},
     *     mimeTypesMessage = "Geldige bestandstypes: png, jpg"
     * )
     */
    private $file;

    private $mapCoordinates;


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
     * @return CollectionItem
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
     * @return CollectionItem
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
     * @return CollectionItem
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
     * @return CollectionItem
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
     * Set imageURL
     *
     * @param string $imageURL
     *
     * @return CollectionItem
     */
    public function setImageURL($imageURL)
    {
        $this->imageURL = $imageURL;

        return $this;
    }

    /**
     * Get imageURL
     *
     * @return string
     */
    public function getImageURL()
    {
        return $this->imageURL;
    }

    /**
     * Set category
     *
     * @param Category $category
     *
     * @return CollectionItem
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set year
     *
     * @param integer $year
     *
     * @return CollectionItem
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return CollectionItem
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
     * Set mustShowDate
     *
     * @param boolean $mustShowDate
     *
     * @return CollectionItem
     */
    public function setMustShowDate($mustShowDate)
    {
        $this->mustShowDate = $mustShowDate;

        return $this;
    }

    /**
     * Get mustShowDate
     *
     * @return bool
     */
    public function getMustShowDate()
    {
        return $this->mustShowDate;
    }

    /**
     * Set positionX
     *
     * @param float $positionX
     *
     * @return CollectionItem
     */
    public function setPositionX($positionX)
    {
        $this->positionX = $positionX;

        return $this;
    }

    /**
     * Get positionX
     *
     * @return float
     */
    public function getPositionX()
    {
        return $this->positionX;
    }

    /**
     * Set positionY
     *
     * @param float $positionY
     *
     * @return CollectionItem
     */
    public function setPositionY($positionY)
    {
        $this->positionY = $positionY;

        return $this;
    }

    /**
     * Get positionY
     *
     * @return float
     */
    public function getPositionY()
    {
        return $this->positionY;
    }

    /**
     * Set yearFrom
     *
     * @param integer $yearFrom
     *
     * @return CollectionItem
     */
    public function setYearFrom($yearFrom)
    {
        $this->yearFrom = $yearFrom;

        return $this;
    }

    /**
     * Get yearFrom
     *
     * @return int
     */
    public function getYearFrom()
    {
        return $this->yearFrom;
    }

    /**
     * Set yearTill
     *
     * @param integer $yearTill
     *
     * @return CollectionItem
     */
    public function setYearTill($yearTill)
    {
        $this->yearTill = $yearTill;

        return $this;
    }

    /**
     * Get yearTill
     *
     * @return int
     */
    public function getYearTill()
    {
        return $this->yearTill;
    }

    /**
     * Set columnID
     *
     * @param integer $columnID
     *
     * @return CollectionItem
     */
    public function setColumnID($columnID)
    {
        $this->columnID = $columnID;

        return $this;
    }

    /**
     * Get columnID
     *
     * @return int
     */
    public function getColumnID()
    {
        return $this->columnID;
    }

    /**
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {

        $this->file = $file;
    }

    /**
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }

    public function setMapCoordinates($coordinates) {
        $this->mapCoordinates = $coordinates;
    }

    public function getMapCoordinates() {
        return $this->mapCoordinates;
    }

    //File upload functions
    public function uploadImage()
    {
        if ($this->getFile() === null) {
            return;
        }

        $mediaUtils = new MediaUtils();

        $this->getFile()->move(
            $mediaUtils->getUploadRootDir($this->getType()),
            $this->getFile()->getClientOriginalName()
        );

        $this->imageURL = $mediaUtils->getUploadDir($this->getType()).'/'.$this->getFile()->getClientOriginalName();

        $this->file = null;
    }
}
