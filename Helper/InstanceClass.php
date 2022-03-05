<?php




class InstanceClass
{
    public static function get(string $name) : object
    {
        return new $name;
    }
}