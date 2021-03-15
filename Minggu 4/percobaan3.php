<?php
//Protected
class Car{
    protected $model;
    
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
?>