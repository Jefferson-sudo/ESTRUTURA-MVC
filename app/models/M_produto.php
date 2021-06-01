<?php

namespace app\models;
use app\core\Model;

class M_produto extends Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function lista(){
        
        $sql = "SELECT * FROM produto";
        $qry = $this->db->query($sql);
        
        return $qry->fetchAll();
        
    }
}
