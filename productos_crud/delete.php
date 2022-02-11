<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_db', 'root', 'toor');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$id = $_POST['id'] ?? null;
if(!$id){
    header('Location:index.php');
    exit;
}

$consulta = $pdo->prepare('DELETE FROM products WHERE id = :id');
$consulta->bindValue(':id', $id);
$consulta->execute();

header('Location:index.php');


