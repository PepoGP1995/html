<?php

include_once( $_SERVER['DOCUMENT_ROOT'] . "/formulariophp7/config.inc.php" );
include_once(DIR_INC . "class.mysql.inc.php");
$bd = new class_mysql();
$bd->insertar($_GET['temperatura'] , $_GET['humedad'], $_GET['fecha']);


?>