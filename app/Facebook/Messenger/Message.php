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
    protected const MODIFIERS = ['limit'];
    protected const FIELDS = [
        'id' => 'int',
        'created_time' => 'string',
        'message' => 'string',
        'from' => 'array',
        'to' => 'array',
        'sticker' => 'string',
        'tags' => 'array'
    ];
    protected const CONNECTIONS = ['shares', 'attachments'];
    protected array $query_modifiers = [];
    protected array $query_fields = [];
    protected array $query_connections = [];

    public static function new(array $fields = [], bool $all_fields = false) : self
    {
        return new self($fields, $all_fields);
    }

}
