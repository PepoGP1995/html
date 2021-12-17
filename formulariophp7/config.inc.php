<?php

	define( "DIR_RAIZ", $_SERVER['DOCUMENT_ROOT']."/formulariophp7" );
	define( "DIR_INC", DIR_RAIZ . "/includes/" );
	
	define( "HOST", "http://" . $_SERVER['HTTP_HOST'] );
	define( "DIR_IMG", HOST . "/formulariophp7/images/" );

	define( "MYSQL_HOST", "localhost" );
	define( "MYSQL_USER", "comunicaciones" );
	define( "MYSQL_PASSWD", "comunicaciones" );
	define( "MYSQL_DBNAME", "sensores" );
	define( "MYSQL_DEBUG", "false" );
	
	define( "TMPDIR", DIR_RAIZ . "/tmp" );
	session_save_path( TMPDIR );

echo $_SERVER['DOCUMENT_ROOT']."<br>";
	echo DIR_RAIZ."<br>";
	echo TMPDIR."<br>";
	echo HOST."<br>";
	echo DIR_INC."<br>";
	echo DIR_IMG."<br>";
	echo MYSQL_HOST;

?>