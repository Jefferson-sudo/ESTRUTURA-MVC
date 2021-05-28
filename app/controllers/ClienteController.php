<?php

namespace app\controllers;

class ClienteController {

    public function index() {
        echo "Metado index de cliente";
    }

    public function lista($valor=NULL) {
        echo "Listando Clientes {$valor}...";
    }

}
