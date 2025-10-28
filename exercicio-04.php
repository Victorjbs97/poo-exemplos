<?php 
    require_once "./src/Livro.php";
    $livro1 = new Livro("A Metamorfose: DIE VERWANDLUNG", "Franz Kafka",null,"https://m.media-amazon.com/images/I/81c3lXIdEGL._UF1000,1000_QL80_.jpg");
    $livro2 = new Livro("Quarta asa", "Rebecca Yarros", 544, "https://m.media-amazon.com/images/I/61JCOch1m2L._SL500_.jpg");
    $livro3 = new Livro("Casas estranhas: Casas estranhas", "Uketsu",176, "https://m.media-amazon.com/images/I/81-m2B4F9hL.jpg");
    $livro4 = new Livro("Alchemised", "SenLinYu",960, "https://m.media-amazon.com/images/I/71Up57zy7pL._SY425_.jpg");
    $livro5 = new Livro("It: A coisa", "SeStephen Kingn",1104, "https://m.media-amazon.com/images/I/91g9Dvtf+jL._SL1500_.jpg");

    $livros = [$livro1,$livro2,$livro3,$livro4,$livro5];




?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Exercicio 4</title>
</head>

<body>
    <h1>Encapsulamento</h1>
    <?php foreach($livros as $livro):?>
        <div class='card' style='width: 15rem;'>
            <img src='<?=$livro->getImagem()?>' alt='' class='card-img-top' img-thumbnail'>
            <div class='card-body'>
                <h5 class='card-title'><?=$livro->getTitulo()?></h5>
                <p class='card-text'><b>Autor:</b> <?=$livro->getAutor()?></p>
                <?php if($livro->getPaginas()): ?>
                    <P><b><?=$livro->getPaginas()?></b> paginas</P>
                <?php endif ?>
            </div>
        </div>
    <?php endforeach ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>