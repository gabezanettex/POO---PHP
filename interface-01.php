<?php 

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

class Civic implements Veiculo {

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


$carro = new Civic();

$carro->acelerar(120);
$carro->frenar(2);
$carro->trocarMarcha(1);

?>