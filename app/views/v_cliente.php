<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESTRUTURA MVC</title>
</head>
<body>

    <h1>Curso de MVC </h1>
    <p>Estamos na view do cliente</p>    
    <?php
        //$clientes recebe os valores do metado lista em ClienteController linha 17
        foreach ($clientes as $cliente){
           echo $cliente["nome"]."</br>";
        }
    ?>

</body>
</html>
