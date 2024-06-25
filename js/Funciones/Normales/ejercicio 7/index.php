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
        var_dump("Area del triangulo: ".figuras("triangulo",14,26));
        echo "<br>";
        var_dump("Area del cuadrado: ".figuras("cuadrado",34,34));
        echo "<br>";
        var_dump("Area del rectangulo: ".figuras("rectangulo",15,24));
        echo "<br><br>";
        
        var_dump("Area del triangulo: ".$operacion("triangulo",24,26));
        echo "<br>";
        var_dump("Area del cuadrado: ".$operacion("cuadrado",16,16));
        echo "<br>";
        var_dump("Area del rectangulo: ".$operacion("rectangulo",32,24));
        echo "<br>";

    ?>
</body>
</html>