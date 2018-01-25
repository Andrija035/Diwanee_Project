<?php
class Autoload{
    public function __construct(){
        spl_autoload_register(function($imeKlase){
            if(file_exists('lib/' . $imeKlase . '.php'))
                require_once 'lib/' . $imeKlase . '.php';
        });
    }
}
