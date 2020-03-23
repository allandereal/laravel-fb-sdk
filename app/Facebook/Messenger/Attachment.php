<?php
/**
 * Created by PhpStorm.
 * User: allan
 * Date: 3/23/20
 * Time: 6:55 PM
 */

namespace App\Facebook\Messenger;


final class Attachment
{
    private int $id;
    private int $limit = 10;
    private string $file_url;
    private string $video_data;
    private string $name;
    private string $mime_type;
    private string $image_data;
    private float $size;
}
