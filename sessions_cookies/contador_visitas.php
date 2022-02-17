<?php
session_start();
//echo session_id();

$_SESSION['n_visitas'] = $_SESSION['n_visitas'] ?? 0;
$_SESSION['n_visitas']++;

if($_SESSION['n_visitas'] > 10){
    echo "Ya has visitado la página demasiadas veces";
    session_unset();
    session_destroy();
}
//var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ya has visitado la página <?php echo $_SESSION['n_visitas'] ?? 0?> veces </h1>
</body>
</html>