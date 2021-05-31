<?php

namespace app\core;

class Controller {

    public function load($viewName,  $viewDados=  array()) {
        extract($viewDados);//Extrai e cria variaveis com as chaves do array
        include 'app/views/' . $viewName . ".php";
    }

}
