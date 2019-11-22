<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
$servidor = "mysql:host=localhost;dbname=blog";
$usuario = "developer";
$senha = "4linux";

try {
    $conexao = new PDO($servidor, $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->beginTransaction();

    $cont = $conexao->exec('DELETE FROM usuarios');
    echo "{$cont} <br>";
    $conexao->exec('INSERT INTO vendas VALUES ("x", "y")');

    $conexao->commit();
} catch (PDOException $e) {
    $conexao->rollBack();
    echo "Erro: ".$e;
}