<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms 1</title>
</head>

<body>
    <h1> Fomrs 1</h1>
    <form action="" method="GET">
        <p>
            <label for="num"> Endevina el numero </label>
            <input type="text" name="numero">
        </p>
        <input type="submit" value="enviar">
    </form>
    <p>
        <?php
        if ($_SERVER['REQUEST_METHOD']='GET' && isset($_GET["numero"])) {
            $numero = $_GET["numero"];
            $numeroSecret=9;
            $result = $numeroSecret==$numero ? "Molt Bé" : "Has fallat";
            //echo $result;

        }
        ?>
    </p>
</body>

</html>