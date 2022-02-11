<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_db', 'root', 'toor');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$consulta = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
$consulta->execute();

$productos = $consulta->fetchAll(PDO::FETCH_ASSOC);
var_dump($productos);
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
      <?php foreach ($productos as $i => $producto): ?>
        <tr>
          <th scope="row"><?php echo $i + 1 ?></th>
          <td></td>
          <td><?php echo $producto['title'] ?></td>
          <td><?php echo $producto['price'] ?></td>
          <td><?php echo $producto['create_date'] ?></td>
          <td>
            <a href="" class="btn btn-sm btn-outline-primary">Editar</a>
            <a href="" class="btn btn-sm btn-outline-danger">Borrar</a>
          </td>
        </tr>

      <?php endforeach ?>
    </tbody>
  </table>

</body>

</html>