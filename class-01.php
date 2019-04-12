<?php 

class Pessoa {

    public $name; //atributor

    public function falar(){   //método

        return "O meu nome é " .$this->name;

    }

}

$gabe = new Pessoa();
$gabe->name = "Gabe Zanette";
echo $gabe->falar();


?>