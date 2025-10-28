<?php
    require_once "./src/Cliente.php";

    $clienteA = new Cliente("",-27,"joao.com","11951746767");
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
    <h1 class="text-2xl ...">Exemplos de PHP com POO</h1>
    <h2><?=$clienteA->getNome()?></h2>
    <h2><?=$clienteA->getIdade()?></h2>
    <h2><?=$clienteA->getEmail()?></h2>
    <h2><?=$clienteA->getTelefone()?></h2>

</body>
</html>