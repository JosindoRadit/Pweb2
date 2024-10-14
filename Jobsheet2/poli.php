<?php
class pengguna{
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