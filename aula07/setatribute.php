<?php
$servidor = "mysql:host=localhost;dbname=blog";
$usuario = "developer";
$senha = "4linux";
$conexao = new PDO($servidor, $usuario, $senha);
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
$res = $conexao->query("SELECT * FROM usuarios");
foreach ($res as $usuario) {
    echo "<div class='card'></div>Nome: " . $usuario['nome'] . "<br>Email: " . $usuario['email'] . "</div>";
}
?>
</body>
</html>
