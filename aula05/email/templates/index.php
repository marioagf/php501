<?php require_once '../validaEmail.php';?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Validar Email</title>
</head>
<body>
    <?php
        if (isset($_POST['inputEmail'])) {
            try {
                Email::validar($_POST['inputEmail']);
                echo '<div class="alert alert-success"><p>Sucesso</p>Email valido.</div>';
            } catch (Exception $e) {
                echo '<div class="alert alert-danger"><p>Erro</p>Email invalido.</div>';
            }

        }
    ?>
    <form action="" method="post" class="col-md-12">
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input class="form-control" type="text" name="inputEmail" id="inputEmail" placeholder="Digite um email">
        </div>
        <button class="btn btn-primary" type="submit">Validar</button>
    </form>
</body>
</html>