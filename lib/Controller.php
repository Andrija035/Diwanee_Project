<?php
class Controller{
    public $view;
    public $model;
    public function __construct(){
        $this->view=new View();
    }
    public function loadModel($name) {
        $path = "model/{$name}_model.php";
        if (file_exists($path)) {
            require "model/{$name}_model.php";
            $modelName = $name . '_Model';
            $this->model = new $modelName();
        }
    }
}
