<?php 

$conection = new mysqli("localhost", "root", "", "Proyecto");

mysqli_query($conection, "SET NAMES 'utf8'");

if($conection->connect_errno){
	echo "Error en la conexión";
	exit;
}

?>