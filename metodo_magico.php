<?php 

class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($logr,$num,$cid){

        $this->logradouro = $logr;
        $this->numero = $num;
        $this->cidade = $cid;

    }

    public function __destruct(){

        //var_dump("Destruir");
        echo  "<br>Destruindo...";
    }

    public function __toString(){

        return  $this->logradouro.", ".$this->numero. " - ".$this->cidade;
    }


}


$meuEndereco = new Endereco("Rua Congonha Martins", "13", "Novigrad");

//var_dump($meuEndereco);
echo $meuEndereco;


?>