<?php

include "../connect.php";

session_start();

if($_SESSION['logado'] != true){

	header('Location: logar.php');

	die();
}

if(isset($_GET['sair'])){

	session_destroy();

	header('Location: logar.php');
	
	die();
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>Logado</h1>
	<p><a href="?sair">Deslogar</a></p>
</body>
</html>


