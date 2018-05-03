<?php

if (isset($_POST['submit'])) {

	include_once 'static/connection.php';

	$datetime = date_create()->format('Y-m-d H:i:s');

	$Data['Nombre'] = mysqli_real_escape_string($connection, $_POST['Nombre']);
	$Data['Username'] = mysqli_real_escape_string($connection, $_POST['Username']);
	$Data['Edad'] = mysqli_real_escape_string($connection, $_POST['Edad']);
	$Data['Email'] = mysqli_real_escape_string($connection, $_POST['Email']);
	$Data['Password'] = mysqli_real_escape_string($connection, $_POST['Password']);
	$Data['Date'] = mysqli_real_escape_string($connection, $datetime);
	$Data['Type'] = mysqli_real_escape_string($connection, $_POST['Administrador']);
	
}else{
	header("Location:home.php");
	exit();
}