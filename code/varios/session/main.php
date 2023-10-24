<?php
	 session_start();
	//Comprobar si exise una sesion
	if(!isset($_SESSION["usuario"])){
		header("Location: error.php");
	}
?>

<h1> Aceptado ... :D </h1>
<?php
	echo 'Hola ', $_SESSION["usuario"], ' alias ', $_SESSION["nickname"], ' fuiste atrapado';
?>	

<a href="logout.php">Cerrar</a>