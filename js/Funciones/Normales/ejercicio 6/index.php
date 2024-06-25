<?php
    include("./libreria/operaciones.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        var_dump("promedio 1: ".$promedio1(34));
        echo "<br>";
        var_dump("promedio 2: ".$promedio1(20));
        echo "<br>";
        var_dump("promedio 3: ".$promedio2(37));
        echo "<br>";
        var_dump("suma de promedios: ".$promedios(34,20,37));
        echo "<br> <br>";

        var_dump("promedio 1: ".promedio1(50));
        echo "<br>";
        var_dump("promedio 2: ".promedio1(73));
        echo "<br>";
        var_dump("promedio 3: ".promedio2(20));
        echo "<br>";
        var_dump("suma de promedios: ".promedios(50,73,20));
    ?>
</body>
</html>