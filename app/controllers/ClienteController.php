<?php

namespace app\controllers;

use app\core\Controller;
class ClienteController extends Controller{

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
        $dados["nome"]  = "Jefferson Mateus";
        $dados["email"] = "jefferson@jefferson.com";
        
        $this->load("v_cliente",$dados);
    }

}
