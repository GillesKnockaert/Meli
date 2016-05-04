<?php

namespace BazookasBundle\Helper;

use FFMpeg;

class MediaUtils {

    private $ffmpeg;

    public function __construct() {
        $this->ffmpeg = FFMpeg\FFMpeg::create(array(
                'ffmpeg.binaries'  => __DIR__.'/../../../ffmpeg/bin/ffmpeg.exe',
                'ffprobe.binaries' => __DIR__.'/../../../ffmpeg/bin/ffprobe.exe',
                'timeout'          => 3600, // The timeout for the underlying process
                'ffmpeg.threads'   => 12,   // The number of threads that FFMpeg should use
        ));
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
        return __DIR__.'/../../../web/'.$this->getUploadDir($fileType);
    }

    public function getUploadDir($fileType) {
        $path = 'Media/';

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
