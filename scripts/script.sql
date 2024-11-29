/*
CREATE TABLE Categoria (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
);

CREATE TABLE Produto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10, 2),
    categoria_id INT,
    FOREIGN KEY (categoria_id) REFERENCES Categoria(id)
);

-- Inserindo dados nas tabelas
INSERT INTO Categoria (nome) VALUES ('Eletrônicos'), ('Roupas'), ('Livros'), ('Móveis'), ('Brinquedos');

INSERT INTO Produto (nome, descricao, preco, categoria_id) VALUES
('Smartphone', 'Um smartphone moderno', 1500.00, 1),
('Notebook', 'Um notebook potente', 3500.00, 1),
('Camiseta', 'Camiseta de algodão', 50.00, 2),
('Calça Jeans', 'Calça jeans azul', 120.00, 2),
('Livro de PHP', 'Aprenda PHP do zero', 80.00, 3),
('Estante', 'Estante de madeira', 300.00, 4),
('Boneca', 'Boneca de pano', 40.00, 5),
('Carrinho', 'Carrinho de brinquedo', 30.00, 5);

*/

DROP DATABASE IF EXISTS mvc_db;

CREATE DATABASE mvc_db;

USE mvc_db;

CREATE TABLE Categoria (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
);

CREATE TABLE Produto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10, 2),
    categoria_id INT,
    FOREIGN KEY (categoria_id) REFERENCES Categoria(id)
);

-- Inserindo dados nas tabelas
INSERT INTO Categoria (nome) VALUES 
('Eletrônicos'), 
('Roupas'), 
('Livros'), 
('Móveis');

INSERT INTO Produto (nome, descricao, preco, categoria_id) VALUES
-- Produtos para categoria Eletrônicos
('Smartphone', 'Um smartphone moderno', 1500.00, 1),
('Notebook', 'Um notebook potente', 3500.00, 1),
('Tablet', 'Um tablet leve', 1200.00, 1),
('Smartwatch', 'Um relógio inteligente', 800.00, 1),
('Câmera', 'Uma câmera digital', 2500.00, 1),
('Fone de Ouvido', 'Fone de ouvido sem fio', 300.00, 1),
('TV', 'Uma TV 4K', 4000.00, 1),
('Console', 'Um console de videogame', 2500.00, 1),

-- Produtos para categoria Roupas
('Camiseta', 'Camiseta de algodão', 50.00, 2),
('Calça Jeans', 'Calça jeans azul', 120.00, 2),
('Jaqueta', 'Jaqueta de couro', 300.00, 2),
('Vestido', 'Vestido de verão', 150.00, 2),
('Tênis', 'Tênis esportivo', 200.00, 2),
('Boné', 'Boné ajustável', 40.00, 2),
('Meias', 'Par de meias', 20.00, 2),
('Blusa', 'Blusa de lã', 100.00, 2),

-- Produtos para categoria Livros
('Livro de PHP', 'Aprenda PHP do zero', 80.00, 3),
('Livro de JavaScript', 'Guia completo de JavaScript', 90.00, 3),
('Livro de Python', 'Python para iniciantes', 85.00, 3),
('Livro de Java', 'Dominando Java', 95.00, 3),
('Livro de C#', 'C# avançado', 100.00, 3),
('Livro de HTML', 'HTML e CSS', 70.00, 3),
('Livro de SQL', 'Banco de dados SQL', 75.00, 3),
('Livro de Redes', 'Redes de computadores', 110.00, 3),

-- Produtos para categoria Móveis
('Estante', 'Estante de madeira', 300.00, 4),
('Mesa', 'Mesa de escritório', 450.00, 4),
('Cadeira', 'Cadeira ergonômica', 350.00, 4),
('Sofá', 'Sofá de 3 lugares', 1200.00, 4),
('Cama', 'Cama de casal', 1000.00, 4),
('Guarda-roupa', 'Guarda-roupa grande', 1500.00, 4),
('Mesa de Centro', 'Mesa de centro moderna', 200.00, 4),
('Poltrona', 'Poltrona confortável', 600.00, 4);

