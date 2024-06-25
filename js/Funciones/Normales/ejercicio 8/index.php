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
        $dias=15;
        $valordia=500000;
        var_dump("Salario: ". salario2($dias,$valordia));
        var_dump("Arl: ". arl2($dias,$valordia));
        var_dump("La salud es: ". salud2($dias,$valordia));
        var_dump("Deducible: ".deducible2($dias,$valordia));
        var_dump("pension: ".pension2($dias,$valordia));
        echo "<br>";
        var_dump("Salario: ". $salario($dias,$valordia));
        var_dump("Arl: ". $arl($dias,$valordia));
        var_dump("La salud es: ". $salud($dias,$valordia));
        var_dump("Deducible: ".$deducible($dias,$valordia));
        var_dump("pension: ".$pension($dias,$valordia));
    ?>
</body>
</html>