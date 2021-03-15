<?php
//Latihan no.4

class Shoes {
	private $merk, 
           $jenis,
           $warna,
           $harga,
           $ukuran,
           $diskon = 0;

    public function __construct( $merk = "merk", $jenis = "jenis", $warna = "warna", $harga = 0, $ukuran = 0 ) {
        $this->merk = $merk;
        $this->jenis = $jenis;
        $this->warna = $warna;
        $this->harga = $harga;
        $this->ukuran = $ukuran;
    }

    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }

    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

    public function getMerk() {
        return "$this->merk, $this->merk";
    }

    public function getInfoShoes() {
        $str = "Merk : {$this->merk} <br> Jenis : {$this->jenis} <br> Warna : {$this->warna} <br> Harga : Rp ".number_format($this->getHarga(), 0, ",", ".")." <br> Ukuran : {$this->ukuran}";
        return $str;
    }

}

$shoes1 = new Shoes("Adidas", "Running", "Black", 850000, 40);
$shoes1->setDiskon(11);
echo $shoes1->getInfoShoes();
?>