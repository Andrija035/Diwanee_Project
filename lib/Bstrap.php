<?php
class Bstrap{
    public $url;
    public $controller='index';
    public $method='index';
    public function __construct(){
        if(isset($_GET['url'])){
            $this->url=rtrim($_GET['url'], '/');
            if(substr($_GET['url'],-1)=='/')
                header('Location: '.URL.$this->url);
            $this->url=filter_var($this->url, FILTER_SANITIZE_URL);
            $this->url=explode('/', $this->url);
        }
        if(file_exists('controller/'.$this->url[0].'.php')){
            $this->controller = $this->url[0];
            unset($this->url[0]);
        }
        require('controller/' . $this->controller . '.php');
        $this->controller=new $this->controller();
        if(isset($this->url[1]))
            if (method_exists($this->controller, $this->url[1])) {
                $this->method = $this->url[1];
                unset($this->url[1]);
            }
        if(empty($this->url))
            $this->url=[];
        else
            $this->url=array_values($this->url);
        call_user_func_array([$this->controller, $this->method], $this->url);
    }
}
