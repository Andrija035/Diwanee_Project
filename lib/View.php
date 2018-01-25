<?php
class View{
    public $title;
    public function render($path){
        require("view/{$path}.php");
    }
}
