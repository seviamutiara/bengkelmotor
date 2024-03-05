<?php
class Mobil {
    public $nama = "Mobil";
    public $stok = 100;

    public function cekStok(){
        return "Sisa stok: " .$this->stok;
    }
}

class truk extends Mobil {

}

$pickup = new Truk();
echo $pickup->nama;         //sharp
echo "<br>";
echo $pickup->cekStok();        // Sisa stok: 100