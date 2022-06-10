<?php

// criar objeto
 
$host = "localhost";
$user = "root";
$password = "";
$dbname = "oie";
try{
	$connect = new PDO("mysql:host=". $host . "; dbname=" . $dbname, $user, $password);
	echo "Conexão realizada com sucesso!";
}catch(Exception $err){
	echo "Erro na conexão";
}

?>
