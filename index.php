<?php
    require_once "./src/Cliente.php";

    $clienteA = new Cliente("João",27,"joao@email.com");
    $clienteB = new Cliente("Pedro",20,"pedro@email.com");

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos</title>
</head>
<body>
    <h1>Exemplos de PHP com POO</h1>
    <hr>
    <h2>Trabalhando com classes e construtor</h2>

    <pre><?=var_dump($clienteA,$clienteB)?></pre>
</body>
</html>