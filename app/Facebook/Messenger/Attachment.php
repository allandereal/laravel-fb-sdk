<?php
/**
 * Created by PhpStorm.
 * User: allan
 * Date: 3/23/20
 * Time: 6:55 PM
 */

namespace App\Facebook\Messenger;


final class Attachment extends Messenger
{
    protected const MODIFIERS = ['limit'];
    protected const FIELDS = [
        'id' => 'int',
        'video_data' => 'string',
        'size' => 'float',
        'name' => 'string',
        'mime_type' => 'string',
        'image_data' => 'string',
        'file_url' => 'string', //could be a connection according to fb graph api!
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
