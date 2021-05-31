<?php

namespace app\controllers;

class ClienteController {

    public function index() {
        echo "Metado index de cliente";
    }

    public function lista($valor = NULL) {
        if ($valor != NULL) {
            if (ctype_digit($valor)) {//Verifica se o parametro passado é um inteiro
                echo "Listando Clientes {$valor}...";
            } else {
                echo "Não foi passado um parametro valido!";
            }
        } else {
            echo "Você se esqueceu de passar o parametro!";
        }
    }

    public function ver() {
        //Chamar a view v_cliente.php
        $this->load("v_cliente");
    }

    public function load($viewName /* $viewDados=  array() */) {
        //extract($viewDados);
        include 'app/views/' . $viewName . ".php";
    }

}
