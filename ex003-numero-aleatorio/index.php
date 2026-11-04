<?php 

function randomNumber() : int {
    return random_int(0,100);
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número aleatorio</title>
    <style>
        html{
            width: 100%;
            height: 100%;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #eee;
        }
        .container{
            background-color: #fff;
            border-radius: 20px;
            padding: 20px;
            color: #71717b;
        }
        button{
            background-color: #00e;
            border: none;
            border-radius: 20px;
            color: #fff;
            padding: 10px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gerando números aleatorios</h1>
        <p>Números de 0 a 100...</p>
        <?php 
            $number = randomNumber();
            echo "<p>O valor gerado foi <strong>$number</strong></p>"
        ?>
        <button onclick="reload()">
            Gerar
        </button>
    </div>
</body>
<script>
    const reload = () => {
        window.location.reload();
    }
</script>
</html>