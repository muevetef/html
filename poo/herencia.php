<?php

use Coche as GlobalCoche;

class Coche {
    const RUEDAS = 4;
    private $color = 'verde';
    protected $potencia = 120;
    public $marca = 'Seat';

    final public function getColor(){
        return $this->color;
    }

}

class Deportivo extends Coche {
    private $color = 'rojo';
    public function getColorHIJO(){
        return $this->color;
    }
    public function getPotencia(){
        return $this->potencia;
    }
    public function getMarca(){
        return $this->marca;
    }

}

$c = new Deportivo();

echo $c->getColor() . '<br>';
echo $c->getPotencia(). '<br>';
echo $c->getMarca(). '<br>';

