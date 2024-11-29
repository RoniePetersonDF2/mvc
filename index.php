<?php
require_once 'controllers/CategoriaController.php';
require_once 'controllers/ProdutoController.php';
        
$categoriaController = new CategoriaController();
$categoriaController->index();

$produtoController = new ProdutoController();
$produtoController->index(1); // Exemplo para categoria com ID 1

