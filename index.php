<?php

//Chamandos as classes
require 'vendor/autoload.php';
/*require 'app/controllers/ClienteController.php';
require 'app/controllers/ProdutoController.php';*/
require("app/core/Core.php");
$core=new Core();
$core->run();//Executa run

//Imprimindo na tela o valores dos indices do array $url da classe core
/*
echo"<pre>";
echo "</br>Controler: ". $core->getController();
echo "</br>Metado: ". $core->getMetodo();
$parametro = $core->getParametros();
foreach ($parametro as $param){//Varre o array e coloca em $param
    echo "</br>Parametro: ".$param;
}
echo"</pre>";
 */