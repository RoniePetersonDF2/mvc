<!-- views/produto/index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Produtos</title>
</head>
<body>
    <h1>Produtos</h1>
    <ul>
        <?php foreach ($produtos as $produto): ?>
            <li><?php echo $produto->getNome(); ?> - <?php echo $produto->getDescricao(); ?> - R$ <?php echo $produto->getPreco(); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
