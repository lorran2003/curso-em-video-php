<?php
function convert(): string
{
    $value = $_GET["moeda"];
    if (!is_numeric($value)) {
        return "<p>Apenas será valido valores númericos: $value</p>";
    }

    $cotacao = 5.25;
    $valueCotado = number_format($value / $cotacao, 2);

    return (
        "<h3>Seus R$ $value equivalem a US$ $valueCotado</h3>" .
        "<p>Cotação fixa de $cotacao</p>"
    );
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html {
            width: 100%;
            height: 100%;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #eee;
        }

        .container {
            background-color: #fff;
            border-radius: 20px;
            padding: 20px;
            color: #71717b;
        }

        button {
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
    <div>
        <h1>Conversor de moedas</h1>
        <?php 
        echo convert();
        ?>
        <button type="button" onclick="voltar()">Voltar</button>
    </div>
</body>

<script>
     const voltar = () => {
        history.back();
     }
</script>
</html>