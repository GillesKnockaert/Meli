<?php

namespace BazookasBundle\Helper;

use FFMpeg;

class MediaUtils {

    private $ffmpeg;
    private $webRoot;

    public function __construct($ffmpeg, $siteUrl) {
        $this->ffmpeg = $ffmpeg;
        $this->webRoot = realpath($siteUrl.'/../web').'/';
    }

    public function createThumbnail($file) {
        $thumbname = $this->getFilenameWithoutExtension($file);

        $video = $this->ffmpeg->open($this->getUploadRootDir('video').'/'.$file->getClientOriginalName());
        
        $video->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(5))
              ->save($this->getUploadRootDir('thumb').'/'.$thumbname.'.jpg');
    }

    public function getFilenameWithoutExtension($file) {
        $thumbname = $file->getClientOriginalName();
        $thumbname = explode('.', $thumbname);
        array_pop($thumbname);
        $thumbname = implode('.', $thumbname);
        return $thumbname;
    }

    public function getExtension($file) {
        $ext = $file->getClientOriginalName();
        $ext = explode('.', $ext);
        return end($ext);
    }

    public function getUploadRootDir($fileType) {
        return $this->webRoot.$this->getUploadDir($fileType);
    }

    public function getUploadDir($fileType) {
        $path = 'Export/Media/';

        switch ($fileType) {
            case 'media':
                $path .= 'Timeline';
                break;
            case 'map':
                $path .= 'Maps';
                break;
            case 'foto':
                $path .= 'Detail/Images';
                break;
            case 'audio':
                $path .= 'Detail/Audio';
                break;
            case 'video':
                $path .= 'Detail/Video';
                break;
            case 'thumb':
                $path .= 'Thumb/Video';
                break;
            default:
                //throw exception
                break;
        }

        return $path;
    }

}
