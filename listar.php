<?php
include_once('connect.php');
$stmt = $connect->prepare("SELECT * FROM oietab ORDER BY id DESC");
$stmt->execute();
$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>

<html>




<table class="table" id="contacts-table">
    <thead>
        <tr>
            <th>#</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($results as $oietab) : ?>
            <tr>
                <td><?= $oietab["id"] ?></td>
                <td><?= $oietab["titulo"] ?></td>
                <td><?= $oietab["descricao"] ?></td>
                <td>
                    <a href="view.php?id=<?= $oietab["id"] ?>">Ver </a>

                    <a href="editar.php?id=<?= $oietab["id"] ?>">Editar</a>
                    <a href="deletar.php?id=<?= $oietab["id"] ?>">X</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>