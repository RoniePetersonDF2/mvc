<?php
require_once 'config/Database.php';
require_once 'dto/CategoriaDTO.php';

class CategoriaDAO {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getAll() {
        $query = "SELECT * FROM Categoria";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $categorias = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $categorias[] = new CategoriaDTO($row['id'], $row['nome']);
        }
        return $categorias;
    }
}
