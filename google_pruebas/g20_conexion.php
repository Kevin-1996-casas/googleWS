<?php

//$conexion = new mysqli("myphpapp-318701:southamerica-east1:grupo20sistema", "root", "grupo20sistema", "grupo20sistema");
//$conexion = new mysqli("NS01.000WEBHOST.COM","id16023351_root",'aD)tb\m)~zQ~7NJ',"id16023351_grupo20sistema");
$dbName = 'grupo20sistema';
$dbUser = 'root';
$dbPass = 'grupo20sistema';
//$conexion = new mysqli('34.95.235.163', "root", "grupo20sistema", "grupo20sistema", 3306);
$mysqli = new mysqli('127.0.0.1', $dbUser, $dbPass, $dbName, 3306);
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else{echo "Conexion exitosa";}

?>
