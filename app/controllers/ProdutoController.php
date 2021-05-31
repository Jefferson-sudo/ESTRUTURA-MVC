<?php

namespace app\controllers;

use app\core\Controller;

class ProdutoController extends Controller {

    public function index() {
        echo "Metado padrao de produto";
    }

    public function lista($valor = 0) {
        if ($valor != NULL) {
            if (ctype_digit($valor)) {
                echo "Listando produtos " . $valor . "...";
            } else {
                echo "O parametro passado não é valido! ";
            }
        } else {
            echo "Você se esqueceu de passar o parametro!";
        }
    }

    public function ver() {
        //Chamar a view v_cliente.php
        $this->load("v_produto");
    }

}
