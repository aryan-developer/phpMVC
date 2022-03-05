<?php

class AutoLoadHelper{
    public function __construct()
    {
        spl_autoload_register(function ($class_name) {
            if (file_exists("./Model/$class_name.php")){
                require_once "./Model/$class_name.php";
            }elseif (file_exists("./Controller/$class_name.php")){
                require_once "./Controller/$class_name.php";
            }elseif (file_exists("./App/$class_name.php")){
                require_once "./App/$class_name.php";
            }elseif (file_exists("./Helper/$class_name.php")){
                require_once "./Helper/$class_name.php";
            }
        });
    }
}