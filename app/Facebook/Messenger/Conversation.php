<?php
/**
 * Created by PhpStorm.
 * User: allan
 * Date: 3/23/20
 * Time: 6:55 PM
 */

namespace App\Facebook\Messenger;


final class Conversation
{
    private int $id;
    private int $limit = 10;
    private bool $can_reply;
    private string $link;
    private int $message_count;
    private array $messages;
    private array $former_participants;
    private string $wallpaper;
    private string $updated_time;
    private string $unread_count;
    private string $subject;
    private array $senders;
    private string $scoped_thread_key;
    private array $participants;
    private bool $is_subscribed;
    private string $name;

    public function __construct()
    {
        return $this;
    }

    private function getQueryString() : string
    {

    }

    private function getMessagesQueryString( string $attachments, string $shares ) : string
    {

    }
}
