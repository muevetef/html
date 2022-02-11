<?php

$edad = 20;
$salario = 3000000;

if ($edad == 21) {
    echo "1";
}

if ($edad == 20)
    echo "1";

if ($edad == 21) {
    echo "1";
} else {
    echo "2";
}

//Diferencia == y ===
$edad == 20; //true
$edad == '20'; //true

$edad === 20; //true
$edad === '20'; //false

// AND y OR
if ($edad > 20 && $salario === 3000000) {
}

if ($edad > 20 || $salario === 3000000) {
}

//Ternario
echo '<br>';
echo $edad < 22 ? 'Jovensuelo' : 'No tan jovensuelo';
echo '<br>';

$miEdad = $edad ?: 18; //$edad ? $edad : 18

//Null coalescing opeador
$var = isset($nombre) ? $nombre : "Luigi";
$var = $nombre ?? 'Luigi';
echo $var . '<br>';

//switch
$rol = 'admin';

switch ($rol) {
    case 'admin':
        echo 'admin';
        break;
    case 'editor':
        echo 'editor';
    case 'user':
        echo 'user';
        break;
    default:
        echo 'default';
}
