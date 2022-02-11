<?php

/*
String
Integer
Float
Bollean
Null
Array
Object
*/

$nombre = "Jorge";
$edad = 23;
$isActive = true;
$altura = 1.75;
$salario = null;

echo $nombre . '<br>';
echo $edad . '<br>';
echo $isActive . '<br>';
echo $altura . '<br>';
echo $salario . '<br>';

echo getType($nombre) . '<br>';
echo getType($edad) . '<br>';
echo getType($isActive) . '<br>';
echo getType($altura) . '<br>';
echo getType($salario) . '<br>';

var_dump($nombre, $edad, $isActive, $altura, $salario);

$nombre = false;
echo getType($nombre) . '<br>';

//Verificar tipo de dato
is_string($nombre);
is_int($edad);
is_bool($isActive);
is_double($altura);

//Ver si una variable està definida
var_dump(isset($nombre));
var_dump(isset($apellido));
echo '<br>';

//Constantes
define('PI', 3.14);
echo PI . '<br>';
var_dump(defined('PI'));

//build-in constant php
echo PHP_INT_MAX;
