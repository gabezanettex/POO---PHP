<?php

class Pessoa {

    public $nome;
    public function falar(){

        return "O meu nome é ". $this->nome;

    }

}

$gabe = new Pessoa();
$gabe->nome = "Gabriela ";
echo $gabe->falar();

?>