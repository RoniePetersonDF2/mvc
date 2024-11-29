<?php
require_once 'config/Database.php';
require_once 'dto/ProdutoDTO.php';

class ProdutoDAO {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getByCategoriaId($categoria_id) {
        $query = "SELECT * FROM Produto WHERE categoria_id = :categoria_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':categoria_id', $categoria_id);
        $stmt->execute();

        $produtos = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $produtos[] = new ProdutoDTO($row['id'], $row['nome'], $row['descricao'], $row['preco'], $row['categoria_id']);
        }
        return $produtos;
    }
}
