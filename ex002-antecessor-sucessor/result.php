<?php
function showNumber(): string
{
    $valueInput = $_GET["number"];
    if (!is_numeric($valueInput)) {
        return "<p>O valor $valueInput não é um valor númerico</p>";
    }
    return ("<p>Antecessor: " . ($valueInput - 1) . "<br/>Número escolhido:" . $valueInput . "<br/>Sucessor: " . ($valueInput + 1) . "</p>");
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="width: 100%;">
    <div style="margin:0 auto; background-color: #fff; border-radius:20px; font-size: x-large; padding: 20px;">
        <?php
        echo showNumber();
        ?>
        <button onclick="backPage()">Voltar</button>
    </div>
</body>
<script>
    const backPage = () => {
        console.log("click");
        history.back();
    }
</script>

</html>