<?php
$a = 'Hola';

function test(){
    // $a = 33;
    global $a;
    echo 'test de funcion '. $a ;
}

// function TEST(){
//     echo 'test de funcion';
// }
test('hola');
echo $a;

echo '<hr>';

//Paso por referéncia
function saludo(&$n){
    $n .= 'Eres un Caracol';
    echo "Hola $n <br>";
}



$nombre = 'Pepe';
$nombre2 = 'Ana';
echo "$nombre - $nombre2 <br>"; 

saludo($nombre);
saludo($nombre2);

echo "$nombre - $nombre2"; 



//devolver valores
function suma($a, $b = 0){
    $c = $a + $b;
    return $c;
}

$resultado = suma(2, 3);

//Ejemplo de suma con paso por referencia
function suma2($a, $b, &$c){
    $c = $a + $b;
}

$resultado2 = 0;
suma2(2, 3,$resultado2);
echo $resultado2;

//Numero indefinido de argumentos
function sum(...$numeros) {
    $acc = 0;
    foreach ($numeros as $n) {
        $acc += $n;
    }
    return $acc;
}
echo sum(1, 2, 3, 4);