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

class Programador extends Pessoa {

    public function verDados(){

        echo get_class($this) . "<br>"; //visualizar qual classe

        echo $this->nome . "<br>";
        echo $this->idade . "<br>"; // protegido - extendido consegue acessar
        echo $this->senha . "<br>";  //privado - extendido não consegue acessar, somente na própria classe
    }
}


$objeto = new Programador();

$objeto->verDados();

?>