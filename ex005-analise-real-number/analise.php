<?php
function separator(): string
{
    $value = $_GET["number"];
    if (!is_numeric($value)) {
        return "<p>Apenas será valido valores númericos: $value</p>";
    }

    $numberWithSignal = number_format($value,3,',','.');
    $parts = explode(',',$numberWithSignal,2);
    $before = $parts[0];
    $after = $parts[1];
    return("<p>Antes da virgula: $before <br/>Depois da virgula: $after</p>");
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
        <h1>Analisador de número real</h1>
        <?php 
        echo separator();
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