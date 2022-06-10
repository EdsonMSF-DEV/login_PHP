<?php 

include "../connect.php";

session_start();

$email = $_POST['email'];
$pass = $_POST['pass'];

$stmt = $connect->prepare("SELECT * FROM usuarios WHERE email = :email AND pass = :pass");

$stmt->bindParam(":email", $email);
$stmt->bindParam(":pass", $pass);

$stmt->execute();

if($stmt->rowCount() == 1){
    
    
    $_SESSION['logado'] = true;

    header("Location: logadoOK.php");

}else{

    header("Location: logar.php");

}



