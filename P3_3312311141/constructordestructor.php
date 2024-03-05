<?php
class Mobil {

    public function __construct(){
        echo "Fungsi Konstruktor dijalankan <br>";
    }

    public function __destruct(){
        echo "Fungsi Destruktor dijalankan <br>";
    }


}

$balekno = new Mobil();
$bwm = new Mobil();