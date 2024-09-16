<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DateTime</title>
</head>
<body>
<p>
    <?php
        $now = new DateTime('now', new DateTimeZone('Europe/Madrid'));
        $simple_date = $now->format('Y/m/d H:i');
        echo $simple_date;
        echo "<br>";
        $date_hour = $now->format('Y-M-D H:i:s');
        echo $date_hour;
        echo "<br>";
        $year = $now->format('Y');
        echo "Any actual: ".$year;
    ?>
</p>
<p>
    <?php
        $mounth_days=$now->format('t');
        echo "This mount has $mounth_days days";
    ?>
</p>
    
</body>
</html>