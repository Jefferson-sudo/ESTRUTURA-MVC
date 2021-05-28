<?php

class Core {
    private $controller;
    private $metodo;
    private $parametros = array();

    //Matado construtor
    function __construct() {
        $this->verificaUri();
    }

    //Funcao que inicia o sistemas
    public function run(){
        $controllerCorrete = $this->getController();

        $c = new $controllerCorrete(); //Cria objeto do tipo que vem no controller
        echo $c->lista();
        $p = new $controllerCorrete();
        echo $p->lista();
    }
    public function verificaUri() {
        $url = explode("index.php", $_SERVER["PHP_SELF"]); //explode - Retorna uma matriz de strings, cada uma como substring de string formada pela divisão dela a partir do delimiter. $_SERVER["PHP_SELF" remete ao aquivo php em questão (não é recomendado seu uso)
        $url = end($url);


        if (!$url == "") { //Verifica se a  $url não esta vazia
            $url = explode('/',$url);
            array_shift($url);//Metado apaga valor no array no indice 0
            
            //Pega o controller
            $this->controller = ucfirst($url[0])."Controller";
            array_shift($url);          
            
            //Pega os metados
            if(isset($url[0])){//Testa se existe metado
                $this->metodo = $url[0];
                array_shift($url);
            }
            
            //Pega os parametros
            $this->parametros = array_filter($url);//Esse aqui recebe todos os valores do array
        }else{
            $this->controller = "index.php";
        }
    }
    
    //Metados especiais 
    function getController() {
        return "app\\controllers\\".$this->controller;
    }

    function getMetodo() {
        return $this->metodo;
    }

    function getParametros() {
        return $this->parametros;
    }



}
