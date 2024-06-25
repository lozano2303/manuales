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
    var_dump(promedios(40,20,50));
    echo "<br>";
    var_dump($promedios2(20,50,50));
    ?>
</body>
</html>