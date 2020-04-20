<?php


namespace App\Facebook\Messenger;

abstract class Messenger
{
    public function __construct(array $fields = [], bool $all_fields = false)
    {
        $defaultFields = array_keys(static::FIELDS);
        $fields = $all_fields ? $defaultFields : $fields;
        foreach ($fields as $field){
            if (in_array($field, $defaultFields, true)){
                $this->query_fields[] = $field;
            }
        }
    }

    public function setQueryModifiers(array $modifiers) : self
    {
        foreach ($modifiers as $key => $value){
            if (in_array($key,  static::MODIFIERS, true)){
                $this->query_modifiers[$key] = $value;
            }
        }
        return $this;
    }

    public function setQueryConnections(array $connections) : self
    {
        foreach ($connections as $name => $connection){
            if (in_array($name, static::CONNECTIONS, true)){
                $this->query_connections[] = $connection->getUpstreamQueryString($name);
            }
        }
        return $this;
    }

    public function getUpstreamQueryString(string $prefix) : string
    {
        $query_string = $prefix;
        foreach($this->query_modifiers as $key => $value){
            $query_string .= '.' . "$key($value)";
        }
        if (!empty($this->query_fields) || !empty($this->query_connections)) {
            $query_string .= '{' . implode(',', array_merge($this->query_fields, $this->query_connections)) . '}';
        }
        return $query_string;
    }

}
