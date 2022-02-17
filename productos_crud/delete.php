<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_db', 'root', 'toor');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';
// exit;

$id = $_POST['id'] ?? null;
if(!$id){
    header('Location:index.php');
    exit;
}
$imagePath = $_POST['imagePath'];
$consulta = $pdo->prepare('DELETE FROM products WHERE id = :id');
$consulta->bindValue(':id', $id);
$consulta->execute();

//Eliminar la imagen y la carpeta
if($imagePath){
    unlink(($imagePath));
    rmdir(dirname($imagePath));
}

header('Location:index.php');


