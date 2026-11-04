<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <main>
        <h1>ola</h1>
        <?php 
            // var_dump($_GET); 
            // a variavel suoer global $request é a junção de todas as variaveis suoer globais $_GET, $_POST e $_COOKiES
            $name = $_GET["name"] ?? "usuario";
            $lastName = $_GET["lastName"] ?? "amado";
            echo("Ola $name $lastName");
        ?>
    </main>
</body>
</html>