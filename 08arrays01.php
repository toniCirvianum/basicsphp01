<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <h1>classic array</h1>
            <?php

    $fruits = ['apple', 'orange', 'melon', 'banana'];
    $fruits2 = array('apple', 'orange', 'melon', 'banana', 'lemon');
    $a = [["hola"],["adeu"]];
    echo "<pre>";
    echo print_r($a);
    echo "</pre>";

    print_r($fruits);
    echo "<br>";
    var_dump($fruits);
    echo "<p>llistat de fruites</p>";
    foreach ($fruits as $fruit) {
        echo "<li> La meva fruita és " + $fruit + "</li>";
    }

    ?>

    </p>
    
</body>
</html>
