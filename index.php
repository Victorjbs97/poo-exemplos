<?php
    require_once "./src/Cliente.php";

    $clienteA = new Cliente("João",27,"joao@email.com");
    $clienteB = new Cliente("Pedro",20,"pedro@email.com");
    $clienteC = new Cliente("Marcos",36,"Marcos@email.com","11 951746767");

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Exemplos</title>
</head>
<body class="">
    <h1 class="text-lg ...">Exemplos de PHP com POO</h1>
    <hr>
    <h2>Trabalhando com classes e construtor</h2>

    <pre><?=var_dump($clienteA,$clienteB,$clienteC)?></pre>
</body>
</html>