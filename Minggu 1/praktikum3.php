<?php
//Latihan No.3 membuat fuction dalam class kendaraan 
class kendaraan{
    public  $jeniskendaraan,
            $jumlahroda,
            $merk,
            $bahanbakar,
            $harga,
            $tahunpembuatan;
    
    public function subsidiBBM(){
        $subsidi = 'Tidak';
        if($this -> bahanbakar == 'Premium' && $this -> tahunpembuatan < 2005){
            $subsidi = 'Ya';
        }
        return $subsidi;
    }
    public function hargaSecond(){
        if($this -> tahunpembuatan > 2010){
            $diskon = $this -> harga - ($this -> harga * 20/100);
        }else if($this -> tahunpembuatan >= 2005 && $this -> tahunpembuatan <= 2010){
            $diskon = $this -> harga - ($this -> harga * 30/100);
        }else if($this -> tahunpembuatan < 2005){
            $diskon = $this -> harga - ($this -> harga * 40/100);
        }
        return $diskon;
    }
}

?>