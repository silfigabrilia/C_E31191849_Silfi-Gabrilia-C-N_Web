<?php
//Praktikum Override
class Car{
    final public function hello(){
        return "beep";
    }
}

class sportsCar extends Car{
    public function hello(){
        return "Hallo";
    }
}

$sportsCar1 = new sportsCar();
echo $sportsCar1->hello();
<?php
//Praktikum Abstract Classes and Methods
abstract class Car{
    abstract public function calcNumMilesOnFullTank();
}

?>