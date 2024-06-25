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
        var_dump(mayor(2000,2007,2014));
        echo "<br>";
        var_dump($mayor(2005,2000,1998));
    ?>
</body>
</html>