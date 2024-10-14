<?php
//Definisi Kelas
class Mobil {
    //atribut atau properti
    public $merk;
    public $warna;

    //constructor
    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $merk;
    }

    //metode atau function
    public function deskripsi() {
        return "mobil ini adalah $this->merk berwarna $this->warna.";

    }
}

// instanisasi objek
$mobil1 = new Mobil("Toyota", "Hitam");
echo $mobil1->deskripsi();
?>