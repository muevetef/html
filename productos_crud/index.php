<?php


$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_db', 'root', 'toor');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo '<pre>';
// var_dump($_GET);
// echo '</pre>';
$search = $_GET['search'] ?? null;

if ($search) {
  $consulta = $pdo->prepare('SELECT * FROM products WHERE title LIKE :search ORDER BY create_date DESC');
  $consulta->bindValue(":search", "%$search%");
} else {
  $consulta = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
}
$consulta->execute();

$productos = $consulta->fetchAll(PDO::FETCH_ASSOC);

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


  <form action="" method="GET" class="col-5">
    <div class="input-group mb-3">
      <input class="form-control" type="search" placeholder="Search" name="search">
      <div class="input-group-append">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </div>
    </div>
  </form>

  <h1>Productos CRUD</h1>
  <a href="create.php" type="button" class='btn btn-sm btn-success'>Nuevo</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Imagen</th>
        <th scope="col">Título</th>
        <th scope="col">Precio</th>
        <th scope="col">Fecha entrada</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($productos as $i => $producto) : ?>
        <tr>
          <th scope="row"><?php echo $i + 1 ?></th>
          <td>
            <?php if ($producto['image']) : ?>
              <img src="<?= $producto['image'] ?>" alt="<?= $producto['title'] ?>" class="product-img">
            <?php endif ?>
          </td>
          <td><?php echo $producto['title'] ?></td>
          <td><?php echo $producto['price'] ?></td>
          <td><?php echo $producto['create_date'] ?></td>
          <td>
            <a href="update.php?id=<?php echo $producto['id'] ?>" class="btn btn-sm btn-outline-primary">Editar</a>
            <!-- <a href="delete.php?id=<?php echo $producto['id'] ?>" class="btn btn-sm btn-outline-danger">Borrar</a> -->
            <form action="delete.php" method="POST" style='display: inline-block'>
              <input type="hidden" name="id" value='<?php echo $producto['id'] ?>'>
              <input type="hidden" name="imagePath" value='<?php echo $producto['image'] ?>'>
              <button type="submit" class="btn btn-sm btn-outline-danger">Borrar</button>
            </form>
          </td>
        </tr>

      <?php endforeach ?>
    </tbody>
  </table>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>