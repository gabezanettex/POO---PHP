<?php 

abstract class Animal {

    public function falar(){
        
        return "Falar";
    }

    public function mover(){
       
        return "Anda";

    }
}

class Cachorro extends Animal {
    
    public function falar(){
        
        return "Late";

    }

}

class Gato extends Animal {

    public function falar(){
       
        return "Mia";

    }
}

class Passaro extends Animal {

    public function falar(){

        return "Canta";

    }
    public function mover(){

        return "Voa e " . parent::mover();
    }
}

$cusca = new Cachorro();
echo $cusca->falar() . "<br>";
echo $cusca->mover() . "<br>";

echo "<br>";

$cat = new Gato();
echo $cat->falar() . "<br>";
echo $cat->mover() . "<br>";

echo "<br>";

$bird = new Passaro();
echo $bird->falar() . "<br>";
echo $bird->mover() . "<br>";

?>