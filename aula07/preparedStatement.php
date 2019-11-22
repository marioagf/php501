<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
$servidor = "mysql:host=localhost;dbname=blog";
$usuario = "developer";
$senha = "4linux";

try {
    $email = "%gmail%";

    $conexao = new PDO($servidor, $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->beginTransaction();
    
    $statement = $conexao->prepare('Select * from usuarios where email like :email');
    $statement->bindParam(':email', $email, PDO::PARAM_STR, 50);
    $statement->execute();

    $res = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach($res as $usuario){
        echo $usuario['nome'] . "<br>";
        echo $usuario['email'] . "<hr>";
    }

    $conexao->commit();
} catch (PDOException $e) {
    $conexao->rollBack();
    echo "Erro: " . $e;
}