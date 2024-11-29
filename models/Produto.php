<?php
class Produto {
    private $id;
    private $nome;
    private $descricao;
    private $preco;
    private $categoria_id;

    public function __construct($id, $nome, $descricao, $preco, $categoria_id) {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->categoria_id = $categoria_id;
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getCategoriaId() {
        return $this->categoria_id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function setCategoriaId($categoria_id) {
        $this->categoria_id = $categoria_id;
    }
}
