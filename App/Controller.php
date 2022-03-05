<?php

class Controller extends Security {
    /**
     * @throws \Exception
     */
    public function loadModel(string $modelName) : object{
        if (file_exists("./Model/$modelName.php")) {
            require_once "./Model/$modelName.php";
            return InstanceClass::get($modelName);
        }else{
            throw new \Exception("$modelName : File NotFound");
        }
    }

    public function loadView(string $view, array $data) : void
    {
        if (file_exists("./View/$view.php")) {
            require_once "./View/common/header.php";
            require_once "./View/$view.php";
            require_once "./View/common/footer.php";
        }else{
            throw new \Exception("$view : File NotFound");
        }
    }

}
