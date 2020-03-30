<?php
/**
 * Created by PhpStorm.
 * User: allan
 * Date: 3/23/20
 * Time: 6:55 PM
 */

namespace App\Facebook\Messenger;


final class Message extends Messenger
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

    private const MODIFIERS = ['limit'];
    private const FIELDS = [
        'id',
        'created_time',
        'message',
        'from',
        'to',
        'sticker',
        'tags'
    ];
    private const CONNECTIONS = ['shares', 'attachments'];

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

    private function getQueryString() : string
    {

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

    /**
     * @return array
     */
    protected function getDefaultModifiers(): array
    {
        return self::MODIFIERS;
    }

}
