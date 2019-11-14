<?php require_once 'classeInterface.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta author='Mariao'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Contato</title>
</head>
<body>
<div class="container mt-5">
    <div class="card">
        <div class="card shadow">
            <div class="card-header">
                <p><?=$obj->getHTML('<h4 class="card-title">{nome}</h4>')?></p>
            </div>
            <div class="card-body">
                <p><?=$obj->getHTML('<p>{email}</p>')?></p> 
                <p><?=$obj->getHTML('<p>{telefone}</p>')?></p>
                <p><?=$obj->getHTML('<p>{endereco}</p>')?></p>
            </div>      
            <div class="card-footer">
                <?=$obj->getHTML('<p>{final}</p>')?>
            </div>
        </div>
    </div>
</div>
</body>
</html>