<?php
	 session_start();
	//Comprobar si exise una sesion
	if(!isset($_SESSION["usuario"])){
		header("Location: error.php");
	}
?>

<h1> Aceptado ... :D </h1>


<?php
echo $_SESSION['user'];
?>

<a href="logout.php">Cerrar</a>
