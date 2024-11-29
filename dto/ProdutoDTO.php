<?php
class ProdutoDTO {
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
}
