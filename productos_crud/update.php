<?php

var_dump($_GET);

$id = $_GET['id'] ?? null;
if (!$id) {
    header('Location:index.php');
    exit;
}

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_db', 'root', 'toor');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$consulta = $pdo->prepare('SELECT * FROM products WHERE id = :id');
$consulta->bindValue(':id', $id);
$consulta->execute();

$producto = $consulta->fetch(PDO::FETCH_ASSOC);

var_dump($producto);

$title = $producto['title'];
$description = $producto['description'];
$price = $producto['price'];
$image = $producto['image'];





?>
<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Hello, world!</title>
</head>

<body>
    <h1>Modificar producto: <?php echo $title ?></h1>
    <?php if (!empty($errors)) : ?>
        <div class="alert alert-danger">
            <?php foreach ($errors as $error) : ?>
                <div><?php echo $error ?></div>
            <?php endforeach ?>
        </div>
    <?php endif ?>
    <form method='post' enctype="multipart/form-data">
        <img src="<?php echo $image ?>" alt="<?php echo $title ?>" class="product-img-view">
        <div class="mb-3">
            <label for="image" class="form-label">Imagen</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $title ?>">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Título</label>
            <textarea class="form-control" id="description" name="description"><?php echo $description ?></textarea>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" step='.01' class="form-control" id="price" name="price" value="<?php echo $price ?>">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</body>

</html>