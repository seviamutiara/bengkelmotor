<?php

class AlatTulis {
    // Properti
    public $nama;
    public $jenis;
    public $harga;

    // Metode untuk mengatur properti
    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function setJenis($jenis) {
        $this->jenis = $jenis;
    }

    public function setHarga($harga) {
        $this->harga = $harga;
    }

    // Metode untuk mendapatkan informasi alat tulis
    public function getInfo() {
        return "Nama: {$this->nama}, Jenis: {$this->jenis}, Harga: {$this->harga}";
    }

    // Metode untuk menampilkan pesan penggunaan alat tulis
    public function gunakan() {
        return "Alat tulis {$this->nama} digunakan untuk menulis.";
    }

    // Metode untuk menghitung diskon berdasarkan persentase
    public function hitungDiskon($persentase) {
        $diskon = ($persentase / 100) * $this->harga;
        return "Diskon {$persentase}%: Rp. {$diskon}. Harga setelah diskon: Rp. " . ($this->harga - $diskon);
    }
}

// Membuat objek dari kelas AlatTulis
$pensil = new AlatTulis();

// Mengatur properti pensil
$pensil->setNama("Pensil");
$pensil->setJenis("Pensil Biasa");
$pensil->setHarga(5000);

// Menampilkan informasi pensil
echo $pensil->getInfo() . "\n";

// Menggunakan pensil
echo $pensil->gunakan() . "\n";

// Menghitung diskon untuk pensil
echo $pensil->hitungDiskon(10) . "\n";

