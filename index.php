<?php
    require_once "Cliente.php";

    $cliente1 = new Cliente();
    $cliente2 = new Cliente();

    $cliente1->nome = "Mônica";
    $cliente1->idade =25 ;
    $cliente1->email ="monica@email.com" ;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos</title>
</head>
<body>
    <h1 style="color:red;background-color:yellow;font-size:5em;">Exemplos de PHP com POO</h1>
    <hr>
    <h2>Trabalhando com classes e objetos</h2>
    <pre><?=var_dump($cliente1,$cliente2)?></pre>
</body>
</html>