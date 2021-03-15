<?php
//PROTECTED
class Tablet{
    protected $merk, $camera, $memory;
    
    function __construct($x,$y,$z){
        $this->merk = $x;
        $this->camera = $y;
        $this->memory = $z;
    }
}

class handphone extends Tablet{
    public $handphone_baru;
    
    function beli_handphone(){
        if($this->handphone_baru == "Iya"){
            return "HP baru dengan spesifikasi:<br />
            Merk: ".$this->merk." 
            <br />Camera: ".$this->camera." MP
            <br />Memory: ".$this->memory."GB";
        }else if($this->handphone_baru == "Tidak"){
            return "HP second dengan spesifikasi:<br />
            Merk: ".$this->setMerk."
            <br />Camera: ".$this->setCamera."
            MP<br />Memory: ".$this->setMemory."GB";
        }
    }
}

$hp1 = new handphone("Samsung", 32, 8);
$hp1->handphone_baru = "Iya";
echo $hp1->beli_handphone();


?>