<?php
class Mahasiswa {
    public $nama;
    public $kelas;
    public $sisasks;

    public function __construct($nama, $kelas, $sisasks) {
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->sisasks = $sisasks;
    }

    public function ambilsks($sks) {
        $this->sisasks -= $sks;
    }

    public function ceksisasks() {
        echo "Sisa SKS untuk mahasiswa {$this->nama} adalah {$this->sisasks}.\n";
    }
}

$mahasiswa1 = new Mahasiswa("Sevia", "IF-01", 88);
$mahasiswa1->ambilsks(20); // mengurangi 20 sks
$mahasiswa1->ceksisasks(); // menampilkan sisa sks
echo "<br>";
// membuat objek mahasiswa2
$mahasiswa1 = new Mahasiswa("Juna", "IF-02", 88);
$mahasiswa1->ambilsks(20); // mengurangi 20 sks
$mahasiswa1->ceksisasks(); // menampilkan sisa sks

?>