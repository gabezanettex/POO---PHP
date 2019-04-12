<?php 

class Pessoa {

    public $nome = "Geralt of Rivia";
    protected $idade = 80;
    private $senha = "yenneferS2";
    
    public function verDados(){

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
}

$objeto = new Pessoa();

//echo $objeto->nome . "<br>";
//echo $objeto->idade . "<br>";  não tem acesso pois é protegido
//echo $objeto->senha . "<br>";  não tem acesso pois é privado

$objeto->verDados();

?>