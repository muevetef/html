<?php

// while (true){//no hacer esto!!!
//     echo 'holaaaa';
// }

$contador = 0;
while ($contador < 10) {
    echo 'holaaaa';
    $contador++;
}

for ($i = 0; $i < 10; $i++) {
    echo $contador;
}
echo $i;

// foreach
$frutas = ['Manzana', 'Pera', 'Limon'];
foreach ($frutas as $fruta) {
    echo $fruta . '<br>';
}

// Sobre un array asociativo
$persona = [
    'nombre' => 'Mario',
    'apellido' => 'Bross',
    'edad' => 30,
    'hobbies' => [1 => 'Tenis', 'Comer']
];

foreach ($persona as $key => $val) {
    if ($key === 'hobbies') {
        break;
    }
    echo $key . ' ' . $val . '<br>';
}
