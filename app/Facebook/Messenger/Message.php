<?php
/**
 * Created by PhpStorm.
 * User: allan
 * Date: 3/23/20
 * Time: 6:55 PM
 */

namespace App\Facebook\Messenger;


final class Message
{
    private int $id;
    private int $limit = 10;
    private string $created_time;
    private array $from;
    private array $to;
    private array $attachments;
    private array $shares;
    private array $tags;
    private string $sticker;
    private string $message;
}
