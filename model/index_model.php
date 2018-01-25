<?php
class Index_Model extends Model{
    public function __construct(){
        parent::__construct();
    }
    public function lista(){
        return $this->db->select('SELECT * FROM nalozi');
    }
}
