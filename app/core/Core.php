<?php

class Core {

    //Funcao que inicia o sistemas
    public function run() {
        $url = explode("index.php", $_SERVER["PHP_SELF"]); //Retorna uma matriz de strings, cada uma como substring de string formada pela divisão dela a partir do delimiter.
        $url = end($url);


        if (!$url == "") {
            $url = explode('/', $url);
            array_shift($url);
 
        }

        echo"<pre>";
        echo $_SERVER["PHP_SELF"];
        print_r($url);
        echo"</pre>";
    }

}
