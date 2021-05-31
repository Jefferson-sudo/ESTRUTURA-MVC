<?php

namespace app\controllers;

class ProdutoController {

    public function index() {
        echo "Metado index de produto";
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
}
    