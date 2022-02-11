<?php
$a = 5;
$b = 4;
$c = 1.2;

//Operaciones aritmeticas
echo ($a + $b) * $c. '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>';
echo $a / $b . '<br>';
echo $a % $b . '<br>';

//operadores de asignación
$a += $b; echo $a . ' <br>';
$a -= $b; echo $a . ' <br>';
$a *= $b; echo $a . ' <br>';
$a /= $b; echo $a . ' <br>';
$a %= $b; echo $a . ' <br>';

//Incrementos
echo $a++ . '<br>';
echo ++$a . '<br>';

//Decremento
echo $a-- . '<br>';
echo --$a . '<br>';

//Comprobaciones
is_float($a);
is_integer($b);
is_numeric("3.45");//true
is_numeric("3f,56");//false

//Conversion
$strNumber = '12.44';
$num = (float)$strNumber;
var_dump($num);
echo '<br>';



//Funciones de numeros
echo "abs(-15)" . abs(-15). '<br>';
/*
pow(2,3);
sqr(16);
max(4,9);
min
round
floor
ceil

*/

//Formatear numeros
$numero = 123456789.12345;
echo number_format($numero, 2, '.', ',');

