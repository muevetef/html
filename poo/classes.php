<?php

class Coche {
    public $color = 'verde';
    private $potencia;
    public $marca;

    public function getColor(){
        return $this->color;
    }
    public function setPotencia($potencia){
        if(!is_numeric($potencia)){
            throw new Exception("Poténcia no válida",1); 
        }
        $this->potencia = $potencia;
    }
    public function getPotencia(){
        return $this->potencia;
    }
    public function esMasPotente($otroCoche){
        //return $otroCoche->potencia < $this->potencia;
        return $otroCoche->getPotencia() < $this->potencia;
    }
}

$miCoche = new Coche();
//$miCoche->color = 'rojo';
//$miCoche->potencia = 120;
$miCoche->marca = 'audi';
echo '<pre>';
var_dump($miCoche);
echo '</pre>';

echo $miCoche->getColor().'<br>';

$tuCoche = new Coche();
$tuCoche->color = 'naranja';
//$tuCoche->potencia = 2;
$tuCoche->marca = 'citröen';

if($miCoche->esMasPotente($tuCoche)){
    echo "El $miCoche->marca es más potente";
}else{
    echo "El $tuCoche->marca es más potente";
}


try {
    $miCoche->setPotencia('tortuga');
} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
} finally {
    echo "Segundo finally.\n";
}


