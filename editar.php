<?php
include_once('connect.php');
$id = $_GET['id'];
$stmt = $connect->prepare("SELECT id, titulo, descricao FROM oietab WHERE id = :id");
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

	<form action="editar-fim.php" method="POST">
		<?php foreach ($results as $post) : ?>
			<div>
				<label>Título</label>
				<input type="hidden" name="id" value="<?= $post['id'] ?>" required>
			</div>
			<div>
				<label>Título</label>
				<input type="text" name="titulo" value="<?= $post['titulo'] ?>">
			</div>
			<div>
				<label>Descrição</label>
				<input type="text" name="descricao" value="<?= $post['descricao'] ?>">
			</div>
		<?php endforeach; ?>
		<div>
			<button type="submit">Editar</button>
		</div>
	</form>

</body>

</html>