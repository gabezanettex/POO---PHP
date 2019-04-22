<?php 

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo {

    public function acelerar($velocidade){

        echo "<br>O veículo acelerou até " . $velocidade . " km/hr";

    }

    public function frenar($velocidade){

        echo "<br>O veículo frenou até " . $velocidade . " km/hr";

    }

    public function trocarMarcha($marcha) {

        echo "<br>O veículo engatou a marcha " . $marcha;
    }
}

class DelRey extends Automovel {

    public function empurrar(){


    }

}


$carro = new DelRey();

$carro->acelerar(150);
?>