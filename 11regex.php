<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regex</title>
</head>
<body>
    <?php
        $string1 ="22334435678";
        $string2="$56759559,,,69696....00";
        $regex="/^[[:digit:]]+$/";
        if (preg_match($regex,$string1)) {
            echo "<p> $string1 té caracters numerics </p>";
        } else {
            echo "<p> $string1 té caracters numerics </p>";
        }

        if (preg_match($regex,$string2)) {
            echo "<p> $string2 té caracters numerics </p>";
        } else {
            echo "<p> $string2 té caracters numerics </p>";
        }
        
    ?>
    
</body>
</html>