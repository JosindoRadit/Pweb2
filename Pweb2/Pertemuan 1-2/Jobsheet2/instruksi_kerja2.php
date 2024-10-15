<?php
//menambahakan Atribut dan Metode
class Mahasiswa {
    private $nama;
    private $nim;
    private $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;


    }

    public function tampilakanData() {
        return "Saya $this->nama<br> dengan $this->nim<br> dari $this->jurusan.";

    }
    public function setNama($newNama){
        $this->nama = $newNama;
    }
    public function setNim($newNim){
        $this->nim = $newNim;
    }
    public function setJurusan($newJurusan){
        $this->jurusan = $newJurusan;
    }
    public function getNama(){
        echo "nama $this->nama<br>";
    }
    public function getNim(){
        echo "Nim $this->nim<br>";
    }
    public function getJurusan(){
        echo "Jurusan $this->jurusan<br>";
    }

}
$mahasiswa1 = new mahasiswa("", "", "");

$mahasiswa1->setNama ("Darno");
$mahasiswa1->setNim ("230302064");
$mahasiswa1->setJurusan ("Komputer dan Bisnis");

$mahasiswa1->getNama();
$mahasiswa1->getNim();
$mahasiswa1->getJurusan();

class Pengguna {
    public $nama;
    

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama(){
        echo "nama $this->nama<br>";
    }
} 

class Dosen extends pengguna{
    public $mataKuliah;

    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }
    public function getmataKuliah(){
        echo "mataKuliah $this->mataKuliah<br>";

    }
    public function aksesFitur(){
        echo "Fitur Terbatas";

    }

}

$mahasiswa2 = new Dosen(nama : "KUYA", mataKuliah : "Inggris");
$mahasiswa2->getNama();
$mahasiswa2->getmataKuliah();
$mahasiswa2->aksesFitur();


    

?>