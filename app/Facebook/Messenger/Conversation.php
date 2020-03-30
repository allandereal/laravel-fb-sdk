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
    private const MODIFIERS = ['limit'];
    private const FIELDS = [
        'id',
        'limit',
        'can_reply',
        'link',
        'message_count',
        'is_subscribed',
        'participants',
        'former_participants',
        'scoped_thread_key',
        'senders',
        'snippet',
        'unread_count',
        'updated_time',
        'name',
        'subject',
        'wallpaper'
    ];
    private const CONNECTIONS = ['messages'];

    private int $id;
    private int $limit = 25;
    private bool $can_reply;
    private string $link;
    private int $message_count;
    private array $messages;
    private array $participants;
    private array $former_participants;
    private string $wallpaper;
    private string $updated_time;
    private string $unread_count;
    private string $subject;
    private array $senders;
    private string $scoped_thread_key;
    private bool $is_subscribed;
    private string $name;
    private array $default_fields = ['id', 'link', 'updated_time'];
    private string $access_token;
    private string $page_id;

    protected array $query_modifiers = [];
    protected array $query_fields = [];
    protected array $query_connections = [];

    public function __construct(array $fields = [], bool $all_fields = false)
    {
        $fields = $all_fields ? self::FIELDS : $fields;
        foreach ($fields as $field){
            if (in_array($field, self::FIELDS, true)){
                $this->query_fields[] = $field;
            }
        }
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
        return json_decode(Http::get($url));
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

    public function setQueryFields(array $fields = []) : self
    {
        //?fields=can_reply,former_participants,id,is_subscribed,link,message_count,name,participants,scoped_thread_key,senders,subject,snippet,unread_count,updated_time,wallpaper,
        //messages.limit(2){created_time,from,id,message,sticker,tags,to,attachments.limit(2){id,image_data,mime_type,name,size,video_data,file_url},shares.limit(2){description,id,link,name}}&limit=2
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

    public function setQueryConnections(array $connections) : self
    {
        foreach ($connections as $name => $connection){
            if (in_array($name, self::CONNECTIONS, true)){
                $this->query_connections[] = $connection->getUpstreamQueryString($name);
            }
        }
        return $this;
    }

    protected function getDefaultModifiers(): array
    {
        return self::MODIFIERS;
    }

}
