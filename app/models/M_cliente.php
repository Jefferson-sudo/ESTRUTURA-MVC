<?php

namespace app\models;
use app\core\Model;

class M_cliente extends Model {
     
    public function __construct() {
        parent::__construct(); //Chama o construtor da classe mãe em (app\core\Model)
    }
    
    public function lista(){
        
        $sql = "SELECT * FROM cliente";
        $qry = $this->db->query($sql);
        
        return $qry->fetchAll();
    }
}
