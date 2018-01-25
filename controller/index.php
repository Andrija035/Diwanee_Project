<?php
class Index extends Controller{
    public function __construct(){
        parent::__construct();
        $this->loadModel(get_class($this));
        session_start();
        if(empty($_SESSION['log'])){
            header('Location: ' . URL . 'panel');
            die();
        }
    }
    public function index(){
        $this->view->title='Home';
        $this->view->render('header');
        $this->view->render('adm');
        $this->view->render('index/index');
        $this->view->render('footer');
    }
    public function logout(){
        unset($_SESSION['log']);
        session_destroy();
        header('Location: ' . URL . 'panel');
    }
    public function lista(){
        $this->view->lista = $this->model->lista();
        $this->view->title='List';
        $this->view->render('header');
        $this->view->render('adm');
        $this->view->render('index/lista');
        $this->view->render('footer');
    }
}
