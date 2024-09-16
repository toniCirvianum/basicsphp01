<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Varaibles</title>
</head>
<body>
    <p>
        <?php
            $num1=10;
            $num2=10.0;
        ?>
        <p>
            <?php
                echo ($num1==$num2)," és cert";
            ?>
        </p>
        <p>
            <?php
                echo ($num1===$num2)," no és cert pq no sónb del mateix tipus";
            ?>
        </p>
    </p>
</body>
</html>