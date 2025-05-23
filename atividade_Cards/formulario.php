<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card dos Personagens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <style>
        body {
            background-image: url('https://images8.alphacoders.com/966/966117.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 600px;
        }

        .form-container h1 {
            margin-bottom: 20px;
        }

        .input-group input,
        .input-group select {
            margin-bottom: 10px;
            border-radius: 10px;
        }

        .btn {
            width: 100%;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h1 class="text-center">Formulario Do Personagem de JOJO:</h1>
        <form action="card.php" method="post">
            <div class="input-group input-group-lg mb-3">
                <input type="text" name="nome" class="form-control" placeholder="Nome do Personagem">
            </div>
            <div class="input-group input-group-lg mb-3">
                <input type="text" name="poder" class="form-control" placeholder="Stand/poder">
            </div>
            <div class="input-group input-group-lg mb-3">
                <select name="parte" class="form-select">
                    <option value="">Selecione a Parte</option>
                    <option value="1">Parte 1 - Phantom Blood</option>
                    <option value="2">Parte 2 - Battle Tendency</option>
                    <option value="3">Parte 3 - Stardust Crusaders</option>
                    <option value="4">Parte 4 - Diamond is Unbreakable</option>
                    <option value="5">Parte 5 - Golden Wind</option>
                    <option value="6">Parte 6 - Stone Ocean</option>
                    <option value="7">Parte 7 - Steel Ball Run</option>
                    <option value="8">Parte 8 - JoJolion</option>
                    <option value="9">Parte 9 - The JOJOLands</option>
                </select>
            </div>
            <div class="input-group input-group-lg mb-3">
                <select name="raca" class="form-select">
                    <option value="">Selecione a Raça</option>
                    <option value="1">Humano</option>
                    <option value="2">Vampiro</option>
                    <option value="3">Homem do Pilar</option>
                    <option value="4">Homens Pedra</option>
                    <option value="5">Alienígena</option>
                    <option value="6">Animal</option>
                    <option value="7">Outros</option>
                </select>

            </div>

            <div class="input-group input-group-lg mb-3">
                <input type="text" name="link" class="form-control" placeholder="Link da imagem">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>