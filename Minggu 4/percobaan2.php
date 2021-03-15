<?php
//Praktikum Enkapsulasi Objek : Private dan Protected
//Private
class Car{
    private $model;
    
    public function setModel($model){
        $this->model = $model;
    }
}

class SportsCar extends Car{
    public function hello(){
        return "beep I am a <i> ".$this->model."</i><br/>";
    }
}

$sportsCar1 = new SportsCar();
$sportsCar1->setModel('Mercedez Benz');

?>