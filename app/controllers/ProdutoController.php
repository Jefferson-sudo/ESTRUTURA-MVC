<?php

namespace app\controllers;

use app\models\M_produto;
use app\core\Controller;

class ProdutoController extends Controller {

    public function index() {
        echo "Metado padrao de produto";
    }

    public function lista() {
        $produto = new M_produto;
        $dados["produtos"] = $produto->lista();
        $this->load("v_produto",$dados);
    }

    public function ver() {
        //Chamar a view v_cliente.php
        $this->load("v_produto");
    }

}
