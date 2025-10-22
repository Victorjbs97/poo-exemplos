<?php 
    require_once "./src/Livro.php";
    $livro1 = new Livro("A Metamorfose: DIE VERWANDLUNG", "Franz Kafka",null,"https://m.media-amazon.com/images/I/81c3lXIdEGL._UF1000,1000_QL80_.jpg");
    $livro2 = new Livro("Quarta asa", "Rebecca Yarros", 544, "https://m.media-amazon.com/images/I/61JCOch1m2L._SL500_.jpg");
    $livro3 = new Livro("Casas estranhas: Casas estranhas", "Uketsu",176, "https://m.media-amazon.com/images/I/81-m2B4F9hL.jpg");
    $livro4 = new Livro("AB", "Não Sei",20);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Exercicio livro construtor</title>
</head>
<body>
    <h1 style="font-weight: 600; font-size:2em;">Livro construtor</h1>
    <hr>
    <?=$livro1->verificarTitulo();?>
    <?=$livro2->verificarTitulo();?>
    <?=$livro3->verificarTitulo();?>
    <?=$livro4->verificarTitulo();?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>