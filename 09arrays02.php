<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $capitals = [
            'France'=>'Paris',
            'Spain'=>'Madrid',
            'Italy'=>'Rome',
            'German'=>'Berlin'
        ];

        $capitals['Greek']='Athens';

        $franceCapital = $capitals['France'];

        array_push($capitals,'Andorra');
        $andorra = in_array('Andorra',$capitals) ?  "Andorra Si" : "Andorra No";
        echo $andorra, "<br>";
        echo "last key: " ,array_key_last($capitals), "<br>";
        array_pop($capitals);
        $andorra = in_array('Andorra',$capitals) ?  "Andorra Si" : "Andorra No";
        echo $andorra, "<br>";
        foreach ($capitals as $country => $capital) {
            echo "<p> Pais: $country - Capital: $capital </p>";
        }
    ?>
    
</body>
</html>