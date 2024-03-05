<?php
class Mobil {
    public $merek;
    public $stok;

    public function pesanMobil(){
        $this->stok = $this->stok - 1;
    }

    public function borongMobil ($jumlah){
        $this->stok = $this->stok - $jumlah;
    }

    public function cekStok(){
        return "Sisa stok: ". $this->stok ."<br>";
    }
}

$balekno = new Mobil();
$balekno->jenis = "Truk";
$balekno->merek = "Pickup";
$balekno->stok = 100;

$balekno->borongMobil(10);
echo $balekno->cekStok();

$balekno->borongMobil(25);
echo $balekno->cekStok();