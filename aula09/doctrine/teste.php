<?php

require_once  "bootstrap.php";

use Curso\Loja\Entidades\produto;

/* INSERT
$produtos = [
    ['nome' => 'TV', 'preco' => 1500],
    ['nome' => 'Radio', 'preco' => 2000],
    ['nome' => 'Geladeira', 'preco' => 2500]
];

foreach($produtos as $produto){
    $dbProduto = new Produto;
    $dbProduto->setNome($produto['nome']);
    $dbProduto->setPreco($produto['preco']);

    $entityManager->persist($dbProduto);
}

$entityManager->flush();
*/

/* SELECT
$produtoRepository = $entityManager->getRepository('Curso\Loja\Entidades\produto');
$produto = $produtoRepository->findBy(['nome' => 'Geladeira']);

echo "<pre>";
print_r($produto);
echo "</pre>";
*/

/* REMOVE 
$produtoRepository = $entityManager->getRepository('Curso\Loja\Entidades\produto');
$produto = $produtoRepository->find(2);
$entityManager->remove($produto);
$entityManager->flush();
*/

echo "<pre>";
print_r($produto);
echo "</pre>";
