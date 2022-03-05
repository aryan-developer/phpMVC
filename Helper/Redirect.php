<?php


class Redirect
{
    public static function to(string $address = "")
    {
        if (ValidValue::requireValue($address)){
            if (ValidValue::isValidUrl($address)){
                header("location:$address");
                die();
            }else{
                throw new Exception("$address : is not a url");
            }
        }else{
            throw new Exception("$address is null");
        }
    }
}