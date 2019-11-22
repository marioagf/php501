<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
$servidor = "mysql:host=localhost;dbname=blog";
$usuario = "developer";
$senha = "4linux";

try {
    $conexao = new PDO($servidor, $usuario, $senha);
    $res = $conexao->query('select * from usuarios;');

    echo "<pre>";
    //print_r($res->fetchAll());
    echo "</pre>";

    while ($linha = $res->fetch(PDO::FETCH_ASSOC)){
        echo "<div class='card'></div>Nome: " . $linha['nome'] . "<br>Email: " . $linha['email'];
        echo "</div>";
    }
} catch (PDOException $e) {
    echo $e;
}
