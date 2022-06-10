<!DOCTYPE html>
<?php
include_once('connect.php');
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript" src='https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: '#basic-conf',
            width: 600,
            height: 300,
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks code fullscreen insertdatetime media nonbreaking',
                'table emoticons template paste help'
            ],
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | ' +
                'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
                'forecolor backcolor emoticons | help',
            menu: {
                favs: {
                    title: 'My Favorites',
                    items: 'code visualaid | searchreplace | emoticons'
                }
            },
            menubar: 'favs file edit view insert format tools table help',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });
    </script>


</head>

<body>
    <form action="inserir.php" method="POST" enctype="multipart/form-data">
        <div><input type="text" name="titulo"></div>
        <div> <textarea name="descricao" id="basic-conf" ></textarea> </div>
        <div><input type="file" class="form-control" id="imagem" name="imagem"></div>
        <input type="submit" value="Cadastrar">
        <br>
      <a href="listar.php">Ver </a>
        
    </form>
</body>

</html>