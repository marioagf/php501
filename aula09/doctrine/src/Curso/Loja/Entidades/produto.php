<?php

namespace Curso\Loja\Entidades;

/**
 * @Entity @table(name="produto")
 */

class Produto
{
    /** @Id @Column(type="integer") @GeneratedValue */
    protected $id;
    /** @Column(type="string", length=50) */
    protected $nome;
    /** @Column(type="decimal", precision=10, scale=2) */
    protected $preco;

    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getPreco(){
        return $this->preco;
    }

    public function setNome(){
        $this->nome = $nome;
    }
    public function setPreco(){
        $this->preco = $preco;
    }
}
