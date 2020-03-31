<?php
/**
 * Created by PhpStorm.
 * User: allan
 * Date: 3/23/20
 * Time: 6:56 PM
 */

namespace App\Facebook\Messenger;


final class Share extends Messenger
{
    protected const MODIFIERS = ['limit'];
    protected const FIELDS = [
        'id' => 'int',
        'link' => 'string',
        'description' => 'string',
        'name' => 'string'
    ];
    protected const CONNECTIONS = [];
    protected array $query_modifiers = [];
    protected array $query_fields = [];
    protected array $query_connections = [];

    public static function new(array $fields = [], bool $all_fields = false) : self
    {
        return new self($fields, $all_fields);
    }

}
