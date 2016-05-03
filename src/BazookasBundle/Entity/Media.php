<?php

namespace BazookasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use FFMpeg;

/**
 * Media
 *
 * @ORM\Table(name="tblMedia")
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
     * @Assert\File(mimeTypes={"image/png", "image/jpeg", "audio/mpeg3", "video/mp4"})
     */
    private $fileNL;

    /**
     * @Assert\File(mimeTypes={"image/png", "image/jpeg", "audio/mpeg3", "video/mp4"})
     */
    private $fileFR;


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

    /**
     * @param UploadedFile $file
     */
    public function setFileNL(UploadedFile $file = null)
    {
        $this->fileNL = $file;
    }

    /**
     * @return UploadedFile
     */
    public function getFileNL()
    {
        return $this->fileNL;
    }

    /**
     * @param UploadedFile $file
     */
    public function setFileFR(UploadedFile $file = null)
    {
        $this->fileFR = $file;
    }

    /**
     * @return UploadedFile
     */
    public function getFileFR()
    {
        return $this->fileFR;
    }

    //File upload functions
    public function getAbsoluteImageURL($file)
    {
        return null === $this->imageURL
            ? null
            : $this->getUploadRootDir($file).'/'.$this->imageURL;
    }

    public function getWebImageURL($file)
    {
        return null === $this->imageURL
            ? null
            : $this->getUploadDir($file).'/'.$this->imageURL;
    }

    protected function getUploadRootDir($file)
    {
        return __DIR__.'/../../../web/'.$this->getUploadDir($file);
    }

    protected function getUploadDir($file)
    {
        $path = 'Media/Detail/';
        $type = $this->getType();

        if ($type == 'foto') {
            $path .= 'Images';
        } else if ($type == 'audio') {
            $path .= 'Audio';
        } else if ($type == 'video') {
            $path .= 'Video';
        }

        return $path;
    }

    public function uploadFiles()
    {
        if ($this->getFileNL() !== null) {
            $this->getFileNL()->move(
                $this->getUploadRootDir($this->getFileNL()),
                $this->getFileNL()->getClientOriginalName()
            );

            $this->contentURLNL = $this->getUploadDir($this->getFileNL()).'/'.$this->getFileNL()->getClientOriginalName();

            if ($this->getType() == 'video') {
                $this->createThumbnail($this->getFileNL());
            }

            $this->fileNL = null;
        }

        if ($this->getFileFR() !== null) {
            $this->getFileFR()->move(
                $this->getUploadRootDir($this->getFileFR()),
                $this->getFileFR()->getClientOriginalName()
            );

            $this->contentURLFR = $this->getUploadDir($this->getFileFR()).'/'.$this->getFileFR()->getClientOriginalName();

            if ($this->getType() == 'video') {
                $this->createThumbnail($this->getFileFR());
            }

            $this->fileFR = null;
        }
    }

    private function createThumbnail($file) {
        // get filename without extension
        $thumbname = $file->getClientOriginalName();
        $thumbname = explode('.', $thumbname);
        array_pop($thumbname);
        $thumbname = implode('.', $thumbname);

        $ffmpeg = FFMpeg\FFMpeg::create(array(
            'ffmpeg.binaries'  => __DIR__.'/../../../ffmpeg/bin/ffmpeg.exe',
            'ffprobe.binaries' => __DIR__.'/../../../ffmpeg/bin/ffprobe.exe',
            'timeout'          => 3600, // The timeout for the underlying process
            'ffmpeg.threads'   => 12,   // The number of threads that FFMpeg should use
        ));

        $video = $ffmpeg->open($this->getUploadRootDir($file).'/'.$file->getClientOriginalName());
        
        $video->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(5))
              ->save(__DIR__.'/../../../web/Media/Thumb/Video/'.$thumbname.'.jpg');
    }
}
