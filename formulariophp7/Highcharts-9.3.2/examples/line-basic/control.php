<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
include_once( $_SERVER['DOCUMENT_ROOT'] . "/formulariophp7/Highcharts-9.3.2/examples/line-basic/config.inc.php" );
include_once(DIR_INC . "class.mysql.inc.php");
$bd = new class_mysql();
$bd->insertar($_GET['temperatura'] , $_GET['humedad'], $_GET['fecha']);



$result=$bd->listar();

?>

<table width="200" border="1">
<tr>
<td>
Temperatura
</td>
<td>
Humedad
</td>
<td>
Fecha
</td>
</tr>
<?php
while($fila= mysqli_fetch_array($result)){?>
<tr>
<td><?php echo $fila['temperatura']; ?></td>
<td><?php echo $fila['humedad']; ?></td>
<td><?php echo $fila['fecha']; ?></td>
</tr>
<?php } ?>
</table>



<?php

//mysql_free_result($resultado);


//$bd->insertar(2,2,2);

?>

<button onclick="location.href='lineal.php'">Grafica Lineal</button>
<br>
<button onclick="location.href='gauge.php'">Grafica Gauge</button>
</body>
</html>
<?php


