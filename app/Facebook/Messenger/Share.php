<?php
/**
 * Created by PhpStorm.
 * User: allan
 * Date: 3/23/20
 * Time: 6:56 PM
 */

namespace App\Facebook\Messenger;


final class Share
{
    private int $id;
    private int $limit = 10;
    private string $name;
    private string $description;
    private array $queryParams = [];

    public function __construct( $queryParams = [] )
    {
        $this->queryParams = $queryParams;
    }

    private function getQueryString() : string
    {

    }
}
