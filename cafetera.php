<?php

class Cafetera {
    private $capacidadMaxima;
    private $cantidadActual;

    public function __construct(){
        $this->capacidadMaxima = 1000;
        $this->cantidadActual = 0; 
    }

    public function llenarCafetera(){
        $this->cantidadActual = $this->capacidadMaxima;
    }

    public function servirTaza(int $cantidad){
        
        $this->cantidadActual -= $cantidad < $this->cantidadActual ? $cantidad : $this->cantidadActual;


    }

    public function vaciarCafetera(){
        $this->cantidadActual = 0;
    }

    public function agregarCafe(int $cantidad){
        if(($cantidad+$this->cantidadActual) <= $this->capacidadMaxima){
                $this->cantidadActual += $cantidad;
        }else{
            $this->cantidadActual = $this->capacidadMaxima;
        }
    }

    public function __toString()
    {
        return 'La cafetera contiene: '.$this->cantidadActual;
    }
}


$c = new Cafetera();
echo $c.'<br>';
$c->llenarCafetera();
echo $c.'<br>';
$c->servirTaza(234);
echo $c.'<br>';
$c->agregarCafe(120);
echo $c.'<br>';
