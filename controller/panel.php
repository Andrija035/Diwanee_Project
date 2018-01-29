<?php
class Panel extends Controller{
    public function __construct(){
        parent::__construct();
        $this->loadModel(get_class($this));
        session_start();
        if(isset($_SESSION['log'])){
            header('Location: ' . URL);
            die();
        }
    }
    public function index(){
        $this->view->title='Panel';
        $this->view->render('header');
        if(isset($_SESSION['poruka'])){
            echo $_SESSION['poruka'];
            unset($_SESSION['poruka']);
        }
        $this->view->render('panel/index');
        $this->view->render('footer');
    }
    public function panel(){
        if(empty($_POST))
            header('Location: '. URL . 'panel');
        elseif($_POST['panel'] != 'login' && $_POST['panel'] != 'register')
            header('Location: '. URL . 'panel');
        else
            $this->{$_POST['panel']}($_POST);
    }
    public function login($podaci){
        if(empty($podaci['user']) || empty($podaci['pass'])) {
            header('Location: ' . URL . 'panel');
            die();
        }
        $this->view->login = $this->model->login($podaci);
    }
    public function register($podaci){
        if(empty($podaci['user']) || empty($podaci['pass'])) {
            header('Location: ' . URL . 'panel');
            die();
        }
        $this->view->register = $this->model->register($podaci);
    }
}
