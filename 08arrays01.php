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
            $fruits=['apple','orange','melon','banana'];
            $fruits2=array('apple','orange','melon','banana','lemon');

            print_r($fruits);
            echo "<br>";
            print_r($fruits2);
            echo "<br>";
            echo "foreach";
            foreach ($fruits as $fruit) {
                echo "<p> $fruit </p>";
            }
            echo "for normal";
            for ($i=0; $i < count($fruits); $i++) { 
                echo "<p> $fruits[$i] </p>";

            }

        ?>

    </p>
    
</body>
</html>