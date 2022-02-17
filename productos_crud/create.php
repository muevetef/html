<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_db', 'root', 'toor');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$title = '';
$description = '';
$price = '';

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $image = $_FILES['image'] ?? null;
    $imagePath = '';

    if (!is_dir('images')) {
        mkdir('images');
    }

    if ($image && $image['tmp_name']) {
        $imagePath = 'images/' . randomString(8) . '/' . $image['name'];
        // 'images/a3der5t/ipoeX.jpeg'
        mkdir(dirname($imagePath));
        move_uploaded_file($image['tmp_name'], $imagePath);
    }

    if (!$title) {
        $errors[] = 'El titulo no puede estar vacio';
    }

    if (!$price) {
        $errors[] = 'El precio no es correcto';
    }

    // var_dump($errors);

    if (empty($errors)) {

        $consulta = $pdo->prepare("INSERT INTO products 
                        (title, image, description,price, create_date)
                VALUES (:title, :image, :description, :price, :date)");
        $consulta->bindValue(':title', $title);
        $consulta->bindValue(':image', $imagePath);
        $consulta->bindValue(':description', $description);
        $consulta->bindValue(':price', $price);
        $consulta->bindValue(':date', date('Y-m-d H:i:s'));

        $consulta->execute();

        header('Location: index.php');
    }
}

function randomString($n)
{

    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $str = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($caracteres) - 1);
        $str .= $caracteres[$index];
    }

    return $str;
}
?>

<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Hello, world!</title>
</head>

<body>
    <h1>Crear un nuevo producto</h1>
    <p>
        <a href="index.php" class="btn btn-secondary">Volver a productos</a>
    </p>
    <?php if (!empty($errors)) : ?>
        <div class="alert alert-danger">
            <?php foreach ($errors as $error) : ?>
                <div><?php echo $error ?></div>
            <?php endforeach ?>
        </div>
    <?php endif ?>
    <form method='post' enctype="multipart/form-data">
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