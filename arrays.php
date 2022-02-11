<?php
//Crear un array
$frutas = ['Manzana','Pera',null, 'Limon'];

//imprimir el array entero
echo '<pre>';
 var_dump($frutas);//print_r($frutas);
echo '<pre>';

//Obtener un elemento
echo $frutas[1];
echo '<br';

//reasignar un elemento 
$frutas[0] = 'Fresa';
var_dump($frutas);
echo '<br';

//check si un elemento existe
echo '<pre>';
 var_dump(isset($frutas[2]));
echo '<pre>';
 
//Añadir elementos al principio
array_unshift($frutas, 'Melon');
var_dump($frutas);
echo '<br>';

//eliminar elementos del array
array_shift($frutas);
var_dump($frutas);
echo '<br>';

//Texto a array
$lista = "lunes martes miércoles";
$newArray = explode(" ", $lista);
var_dump($newArray);

// combinar elementos de un array a string
echo implode("-", $frutas);
echo '<br>';

//Mirar si un elemento está en un arraya
var_dump(in_array('Pera', $frutas));
echo '<br>';

//Buscar el índice de un elemento
var_dump(array_search('Pera', $frutas));
echo '<br>';

//Unir dos arrays
$vegetales = ['Patatas', 'Cebollas', 'Tomates'];
var_dump(array_merge($frutas, $vegetales));
var_dump([...$frutas, ...$vegetales]);
echo '<br>';
//Ordenar arrays
sort($frutas);//sort, rsort
var_dump($frutas);

//Arrays asociativos

$persona = [  
    'nombre' => 'Mario',
    'apellido' => 'Bross',
    "hola",
    'edad' => 30,
    'hobbies' => [1 => 'Tenis', 'Comer']
];

print_r($persona);

//obtener elemento por clave
echo $persona['nombre'];
echo " juega al ";
echo $persona['hobbies'][1];

//Crear un elemento
echo $persona['estado civil'] = 'soltero';
var_dump($persona);


//Operador de fusión de null
/* if(!isset($persona['nick'])){
    $persona['nick'] = 'No tiene';
} */

$persona['nick'] ??= 'No tiene';
var_dump($persona);

//imprimir las keys de un array
var_dump(array_keys($persona));

//Obtener solo los valores
var_dump(array_values($persona));

//Ordenar por clave o por valores
ksort($persona);//ksort, krsort, asort, arsort
var_dump($persona);