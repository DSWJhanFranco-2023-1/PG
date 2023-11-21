<?php
	include("Conexion.php");
	$link=Conectarse();
    $id=$_GET["id"];
    mysqli_query($link,"delete from usuario where id=$id");
	header("Location:Menu.php");
?>