<?php

class Security
{
    public function safeValue(string $value){
        return filter_var($value , FILTER_SANITIZE_STRING);
    }
}