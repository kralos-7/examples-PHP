<?php
	if($_POST['user']=="yoyis" && $_POST['pass']=="1234"){
		session_start();
		$_SESSION["usuario"] = "YO";
		$_SESSION["nickname"] = "yoyis";
		header("Location: main.php");
	}if ($_POST['user']=="Erik" && $_POST['pass']=="0897"){
		session_start();
		$_SESSION["usuario"] = "Erik";
		$_SESSION["nickname"] = "Vasquez";
		header("Location: main.php");
	}else{
		header("Location: error.php");
	}
?>

