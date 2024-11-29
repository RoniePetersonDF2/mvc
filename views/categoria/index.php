<!-- views/categoria/index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Categorias</title>
</head>
<body>
    <h1>Categorias</h1>
    <ul>
        <?php foreach ($categorias as $categoria): ?>
            <li><?php echo $categoria->getNome(); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

