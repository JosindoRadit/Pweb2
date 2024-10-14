<?php
// Menambah Atribut dan Metode
class buku {
    public $judul;
    public $penulis;


    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    public function tampilkaninfo() {
        return "Buku: $this->judul, ditulis oleh $this->penulis.";

    }
    
}

$buku1 = new Buku("Pemrograman PHP", "Jhon Doe");
echo $buku1->tampilkaninfo();
?>