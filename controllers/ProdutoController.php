<?php
require_once 'dao/ProdutoDAO.php';

class ProdutoController {
    private $produtoDAO;

    public function __construct() {
        $this->produtoDAO = new ProdutoDAO();
    }

    public function index($categoria_id) {
        $produtos = $this->produtoDAO->getByCategoriaId($categoria_id);
        include 'views/produto/index.php';
    }
}

