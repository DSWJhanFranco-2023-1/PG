<?php
	function Conectarse(){
		if(!($link=mysqli_connect("localhost","root","","EstudiantesUnad"))){
			echo "Error al conectarse!!";
			exit();
		}
		return $link;
	}
?>
