<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regex Mail</title>
</head>
<body>
    <form action="" method="post">
        <p>
            <label for="mail">Escriuel mail: </label>
            <input type="email" name="email">
        </p>
        <p>
            <input type="submit" value="Send Mail">
        </p>
    </form>

    <?php
        function validaMail($mail) {
            $result=preg_match(
                //Regex pel mail
                '/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9-]+(\.[a-z0-0-]+)*(\.[a-z]{2,3})$/',
                $mail);
            return $result;
        }

        if ($_SERVER['REQUEST_METHOD']=='POST' &&   ISSET($_POST['email'])) {
            $mail=$_POST['email'];
            if (validaMail($mail)) {
                echo "<p> El mail $mail es correcte";
            } else {
                echo "<p> El mail $mail es incorrecte";
            }
            
        } 
        

    ?>
    
</body>
</html>