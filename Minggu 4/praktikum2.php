<?php
//Latihan no.2
abstract class itemProduk{
    abstract function Ukuran();
    abstract function Warna();
    abstract function Nama();
}

class Topi extends itemProduk{
    var $model, $ukuran, $warna;
    
    function Ukuran(){
        if($this->ukuran >= 55 && $this->ukuran <= 57){
            $jk = "M";
        }else if($this->ukuran >= 58 && $this->ukuran <= 59){
            $jk = "L";
        }
        return $jk;
    }
    function Warna(){
        return $this->warna;
    }
    function Nama(){
        return $this->model;
    }
    function __construct($a, $b, $c){
        $this->model = $a;
        $this->ukuran = $b;
        $this->warna = $c;
    }
}

class Celana extends itemProduk{
    var $tipe, $model, $ukuran, $warna;
    
    function Ukuran(){
        if($this->ukuran >= 27 && $this->ukuran <= 30){
            $jk = "M";
        }else if($this->ukuran > 30 && $this->ukuran <= 32){
            $jk = "L";
        }
        return $jk;
    }
    function Warna(){
        return $this->warna;
    }
    function Nama(){
        return $this->model;
    }
    function __construct($a, $b, $c, $d){
        $this->model = $a;
        $this->ukuran = $b;
        $this->warna = $c;
        $this->tipe = $d;
    }
}

class Baju extends itemProduk{
    var $tipe, $model, $ukuran, $warna;
    
    function Ukuran(){
        if($this->ukuran == 'L' || $this->ukuran == 'XL'){
            $jk = "Remaja";
        }else if($this->ukuran == 'S' || $this->ukuran == 'M'){
            $jk = "Anak-anak";
        }
        return $jk;
    }
    function Warna(){
        return $this->warna;
    }
    function Nama(){
        return $this->model;
    }
    function __construct($a, $b, $c, $d){
        $this->model = $a;
        $this->ukuran = $b;
        $this->warna = $c;
        $this->tipe = $d;
    }
}

$baju1 = new Baju("Uniqlo", "L", "Biru", "Cotton Combod");
echo "<b>BAJU</b> <br/>
     Nama Merk: ".$baju1->Nama().
     "<br/> Warna: ".$baju1->Warna().
     "<br/> Ukuran: ".$baju1->Ukuran().
     "<br/>Tipe Bahan: ".$baju1->tipe."<hr/>";

$celana1 = new Celana("Cardinal", 31, "Abu-abu", "Chino");
echo "<b>CELANA</b> <br/>
     Nama Merk: ".$celana1->Nama().
     "<br/> Warna: ".$celana1->Warna().
     "<br/> Ukuran: ".$celana1->Ukuran().
     "<br/>Tipe Bahan: ".$celana1->tipe."<hr/>";

$topi1 = new Topi("Nike", 58, "Orange");
echo "<b>TOPI</b> <br/>
     Nama Merk: ".$topi1->Nama().
     "<br/> Warna: ".$topi1->Warna().
     "<br/>Ukuran: ".$topi1->Ukuran()."<br/>";

?>