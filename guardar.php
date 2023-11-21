<?php
	include("Conexion.php");
	$link=Conectarse();
	$Nombre=$_POST["Nombre"];
	$Apellido=$_POST["Apellido"];
	$Contrasenna=$_POST["Contrasenna"];

	mysqli_query($link,"insert into usuario (Nombre, Apellido, Contrasenna) values ('$Nombre','$Apellido', '$Contrasenna')");
	header("Location:Menu.php");
?>