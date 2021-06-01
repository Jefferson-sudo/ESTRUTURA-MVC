<?php

namespace app\controllers;

use app\models\M_cliente;
use app\core\Controller;

class ClienteController extends Controller {

    public function index() {
        echo "Metado index de cliente";
    }

    public function lista() {
        $clientes = new M_cliente;
        $dados["clientes"] = $clientes->lista(); //Passa uma variavel chamada clientes que receber do objeto clientes os valores do metado lista
        $this->load("v_cliente", $dados);
    }

    public function ver() {
        //Chamar a view v_cliente.php
        $dados["nome"] = "Jefferson Mateus";
        $dados["email"] = "jefferson@jefferson.com";

        $this->load("v_cliente", $dados);
    }

}
