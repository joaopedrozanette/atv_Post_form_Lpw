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
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Card do Personagem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://external-preview.redd.it/sgWt9-igw4C1Zk13B65GUMUqDN84PYf_fwz3jH2c6PI.jpg?auto=webp&s=523123f4f524c43837adc4e34280987a2e84f8c6');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        h1 {
            color: white;
            text-shadow: 1px 1px 4px black;
            margin-bottom: 30px;
        }

        .card {
            box-shadow: 0 4px 12px rgba(0,0,0,0.4);
            border-radius: 15px;
            overflow: hidden;
        }

        a {
            margin-top: 20px;
            color: #fff;
            text-decoration: underline;
        }

        a:hover {
            color: #cce;
        }
    </style>
</head>
<body>
    <h1>Personagem de JOJO:</h1>
    <?php $card->getCard(); ?>
    <a href="formulario.php">Voltar à página principal</a>
</body>
</html>
