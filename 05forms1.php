<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms 1</title>
</head>

<body>
    <h1> Fomrs 1</h1>
    <form action="" method="POST">
        <p>
            <label for="num"> Escriu un numero: </label>
            <input type="text" name="numero">
        </p>
        <input type="submit" value="enviar">
    </form>

    <p>
        <?php
        if ($_SERVER['REQUEST_METHOD']='GET' && isset($_GET["numero"])) {
            $numero = $_GET["numero"];
            echo "el numero és $numero";
        }
        ?>
        <?php
        if ($_SERVER['REQUEST_METHOD']='POST' &&  isset($_POST["numero"])) {
            $numero = $_POST["numero"];
            echo "el numero és $numero";
        }
        ?>
    </p>



</body>

</html>