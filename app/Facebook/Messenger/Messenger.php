<?php


namespace App\Facebook\Messenger;


abstract class Messenger
{
    abstract protected function getDefaultModifiers() : array;

    public function setQueryModifiers(array $modifiers) : self
    {
        foreach ($modifiers as $key => $value){
            if (in_array($key,  $this->getDefaultModifiers(), true)){
                $this->query_modifiers[$key] = $value;
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
