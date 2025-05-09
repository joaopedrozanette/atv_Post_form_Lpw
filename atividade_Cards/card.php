<?php 
    require_once('modelo/Card.php');
$nome = $_POST['nome'];
$poder = $_POST['poder'];
$parte = $_POST['parte'];
$raca = $_POST['raca'];
$link = $_POST['link'];



    $card = new Card();
    $card->setNome($nome);
    $card->setPoder($poder);
    $card->setParte($parte);
    $card->setRaca($raca);
    $card->setLink($link);

    echo"<h1>Personagem de JOJO:</h1>";
    $card->getCard();
    echo "<br><br><a href='formulario.php'>Voltar a pagina principal</a>";




