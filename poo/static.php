<?php

class Venta {
    public string $coche = 'BMW';
}

class Coche {
    const RUEDAS = 4;
    public static $color = 'verde';
    private ?float $cilindrada = null;

    public static function getColor():string{
        return self::$color;
    }

    public function listaCochesVenta(Venta $venta){
        echo $venta->coche;
    }
}

echo Coche::RUEDAS . '<br>';

$coche1 = new Coche();
echo $coche1::RUEDAS . '<br>';
// $coche1->listaCochesVenta('Hola');

//echo $coche1->color;//Mal

// Coche::$color = 'Negro';
// echo $coche1::$color;
// echo Coche::$color;

echo $coche1->getColor();
echo Coche::getColor();

