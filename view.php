<?php
include_once('connect.php');
$id = $_GET['id'];
$stmt = $connect->prepare('SELECT id, titulo,descricao, imagem FROM oietab WHERE id = :id');
$stmt->execute(array('id' => $id));
$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php foreach ($results as $post) : ?>
        <h1><?= $post["titulo"] ?></h1>
        <p><?= $post["descricao"] ?></p>
        <p><img src="<?= $post["imagem"] ?>" alt="<?= $post["titulo"] ?>"></p>
    <?php endforeach; ?>

</body>

</html>