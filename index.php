<?php
    require_once "./src/Cliente.php";

    $cliente1 = new Cliente();
    $cliente2 = new Cliente();

    $cliente1->nome = "Mônica";
    $cliente1->idade =25 ;
    $cliente1->email ="monica@email.com" ;

    $cliente2->nome = "Ana";
    $cliente2->idade = 22;
    $cliente2->email = "ana@ana.com"
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos</title>
</head>
<body>
    <h1 style="display:flex;color:red;background-color:yellow;font-size:2em; padding:20px; gap:20px">Exemplos de PHP com POO</h1>
    <hr>
    <h2>Trabalhando com classes e objetos</h2>
    <h2>Acessando os dados do Objeto!</h2>
    <h4>Cliente 1:</h4>
    <ul>
        <li><strong>Nome: </strong><?=$cliente1->nome?></li>
        <li><strong>Idade: </strong><?=$cliente1->idade?></li>
        <li><strong>Email: </strong><?=$cliente1->email?></li>
    </ul>
    <hr>
    <section style="color:blue; font-size:2em">
        <h4>Cliente B:</h4>
        <p>O cliente <b><?=$cliente2->nome?></b> tem <b><?=$cliente2->idade?></b> e seu email é <b><?=$cliente2->email?></b>.</p>
        <hr>
    </section>
    <pre><?=var_dump($cliente1,$cliente2)?></pre>
</body>
</html>