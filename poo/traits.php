<?php
class Coche {
    public function getMarca() {
        echo "Opel";
    }
}

trait Modelo {
    public function getModelo(){
        echo 'Astra';
    }
}

Class Deportivo extends Coche {
    use Modelo;
}

$c = new Deportivo();
$c->getMarca();
$c->getModelo();