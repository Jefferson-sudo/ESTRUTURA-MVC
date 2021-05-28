<?php
namespace app\controllers;

class ProdutoController {
    
    public function index(){
        echo "Metado index de produto";
    }
    
    public function lista($valor){
        echo "Listando produtos ".$valor."...";
    }
}
