<?php
/**
 * Created by PhpStorm.
 * User: allan
 * Date: 3/23/20
 * Time: 6:55 PM
 */

namespace App\Facebook\Messenger;


use Illuminate\Support\Facades\Http;
use phpDocumentor\Reflection\Types\Void_;

final class Conversation extends Messenger
{
    protected const MODIFIERS = ['limit'];
    protected const FIELDS = [
        'id' => 'int',
        'limit' => 'int',
        'can_reply' => 'bool',
        'link' => 'string',
        'message_count' => 'int',
        'is_subscribed' => 'bool',
        'participants' => 'array',
        'former_participants' => 'array',
        'scoped_thread_key' => 'string',
        'senders' => 'array',
        'snippet' => 'string',
        'unread_count' => 'int',
        'updated_time' => 'string',
        'name' => 'string',
        'subject' => 'string',
        'wallpaper' => 'string'
    ];
    protected const CONNECTIONS = ['messages'];
    private string $access_token;
    private string $page_id;
    protected array $query_modifiers = [];
    protected array $query_fields = [];
    protected array $query_connections = [];

    public static function new(array $fields = [], bool $all_fields = false) : self
    {
        return new self($fields, $all_fields);
    }

    public function setAccessToken(string $access_token) : self
    {
        $this->access_token = $access_token;
        return $this;
    }

    public function setPageId(string $page_id) : self
    {
        $this->page_id = $page_id;
        return $this;
    }

    public function fetch() : object
    {
        $url = "https://graph.facebook.com/v6.0/"
            .$this->page_id.'/conversations?access_token='
            .$this->access_token.$this->getQueryString();
        return Http::get($url);
    }

    private function getQueryString() : string
    {
        $query_strings = [];
        if (!empty($this->query_fields) || !empty($this->query_connections)) {
            $query_strings[] = "fields=" . implode(',', array_merge($this->query_fields, $this->query_connections));
        }
        foreach($this->query_modifiers as $key => $value){
            $query_strings[] = "$key=$value";
        }
        return empty($query_strings) ? '' : '&'.implode('&', $query_strings);
    }

    public function setQueryModifiers(array $modifiers) : self
    {
        foreach ($modifiers as $key => $value){
            if (in_array($key, self::MODIFIERS, true)){
                $this->query_modifiers[$key] = $value;
            }
        }
        return $this;
    }

    public function getUpstreamQueryString(string $prefix) : string
    {
        return $this->getQueryString();
    }

}
