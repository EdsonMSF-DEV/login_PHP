<?php
include_once('connect.php');
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$arquivo = $_FILES['imagem'];

move_uploaded_file($arquivo['tmp_name'],'uploads/'.$arquivo['name']);
$imagem = 'uploads/'.$arquivo['name'];
// método prepare
$stmt = $connect->prepare("INSERT INTO oietab (titulo, descricao, imagem) VALUES(:TITULO, :DESCRICAO, :IMAGEM)");
// método bindParam - ligar o parâmetro com o valor
$stmt->bindParam(':TITULO', $titulo);
$stmt->bindParam(':DESCRICAO', $descricao);
$stmt->bindParam(':IMAGEM', $imagem);
$stmt->execute();
header("location:index.php");
