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
    <p>Estamos na view do produto</p>    
    <?php
        foreach ($produtos as $produto){
            echo $produto["produto"]." -> R$".$produto["preco"].",00</br>";
        }
    ?>
</body>
</html>
