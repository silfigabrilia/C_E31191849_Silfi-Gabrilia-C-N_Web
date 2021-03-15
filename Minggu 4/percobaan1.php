<?php
//Praktikum Inheritance
class Car{
    private $model;
    
    public function setModel($model){
        $this->model = $model;
    }
    public function hello(){
        return "beep I am a <i> ".$this->model."</i><br/>";
    }
}

class SportsCar extends Car{
    
}

$sportsCar1 = new SportsCar();
$sportsCar1->setModel('Mercedez Benz');
echo $sportsCar1->hello();
?>