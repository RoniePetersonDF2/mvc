<?php
require_once 'dao/CategoriaDAO.php';

class CategoriaController {
    private $categoriaDAO;

    public function __construct() {
        $this->categoriaDAO = new CategoriaDAO();
    }

    public function index() {
        $categorias = $this->categoriaDAO->getAll();
        include 'views/categoria/index.php';
    }
}
