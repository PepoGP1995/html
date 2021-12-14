<?php

include_once( $_SERVER['DOCUMENT_ROOT'] . "/formulariophp7/config.inc.php" );
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
