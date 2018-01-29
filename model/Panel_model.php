<?php
class Panel_Model extends Model{
    public function __construct(){
        parent::__construct();
    }
    public function login($podaci){
        $log = $this->db->select('SELECT * FROM nalozi WHERE user = :user AND pass = :pass', array(':user' => $podaci['user'], ':pass' => Hash::create('sha256', $podaci['pass'], PASSWORD)));
        if(empty($log)) {
            $_SESSION['poruka'] = '<h2>You entered a wrong username or password!</h2>';
            header('Location: ' . URL . 'panel');
            die();
        }
        $_SESSION['log'] = $podaci['user'];
        header('Location: ' . URL);
    }
    public function register($podaci){
        $log = $this->db->select('SELECT * FROM nalozi WHERE user = :user', array(':user' => $podaci['user']));
        if(!empty($log)){
            $_SESSION['poruka'] = '<h2>This username already exists!</h2>';
            header('Location: ' . URL . 'panel');
            die();
        }
        $this->db->insert('nalozi', array(
            'user' => $podaci['user'],
            'pass' => Hash::create('sha256', $podaci['pass'], PASSWORD)
        ));
        $_SESSION['poruka'] = '<h2>You created a new account!</h2>';
        header('Location: ' . URL . 'panel');
    }
}
