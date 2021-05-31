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
        $controllerCorrente = $this->getController();//Chama a funcao getController na linha 51

        $c = new $controllerCorrente(); //Cria objeto do tipo que vem no controller
        call_user_func_array(array ($c, $this->getMetodo()), $this->getParametros()); 
    }
    
    //Funcoa responsavel por pegar -> controller, metados e os parametros
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
            $this->controller = ucfirst(CONTROLLER_PADRAO)."Controller";
        }
    }
    
    /*Metados especiais */
    
    //Validando a classe
    function getController() {
        
        if(class_exists(NAMESPACE_CONTROLLER.$this->controller)){
            return NAMESPACE_CONTROLLER.$this->controller;//Retorna a classe que foi passada
        }
        return NAMESPACE_CONTROLLER.ucfirst(CONTROLLER_PADRAO)."Controller"; //Retorna a classe padrão
    }
    
    //Validando metados
    function getMetodo() {
       
        if(method_exists(NAMESPACE_CONTROLLER.$this->controller, $this->metodo)){
            return $this->metodo;//Retorna o metado passado
        }
        return METADO_PADRAO;//Retorna metado padrão
    }
    
    //Retorna os Parametros
    function getParametros() {
        return $this->parametros;
    }



}
