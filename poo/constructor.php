<?php

class Coche {
    public $color;

    public function __construct($color = "verde"){
        $this->color = $color;
        echo 'Creando un coche nuevo </br>';
    }
    public function __destruct()
    {
        echo 'Destroying: ', $this->color, PHP_EOL;
    }
    public function __toString(){
        return 'El color es '. $this->color;
    }   
}


class Deportivo extends Coche {
    public $extras;
    public function __construct($color, $extras){
        parent::__construct($color);
        $this->extras = $extras;
    }
}
$c = new Coche('Rojo');
echo $c->color;

$c1 = new Coche('Verde');
$c1->marca = "Seat";
echo $c1;

$d = new Deportivo('Negro', '2000cv');
echo $d;

