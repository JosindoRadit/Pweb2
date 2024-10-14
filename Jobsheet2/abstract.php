<?php

abstract class Pengguna{
    protected $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    abstract public function aksesFitur ();
}

class Dosen extends Pengguna {
    private $matakuliah;

    public function __construct($nama,$matakuliah){
        parent:: __construct($nama);
        $this->matakuliah = $matakuliah;
    }
    
    public function aksesFitur() {
        return "Dosen " . $this->nama . " yang mengajar matakuliah " . $this->matakuliah . " memiliki akses untuk menginput nilai.";
    }

}

class Mahasiswa extends Pengguna {
    private $nim;
    private $jurusan;

    public function __construct($nama,$nim,$jurusan){
        parent::__construct($nama);
        $this->nim = $nim;
        $this->jurusan =$jurusan;
    }

    public function aksesFitur() {
        return "Mahasiswa bernama " . $this->nama . " dengan NIM " . $this->nim . ", jurusan " . $this->jurusan . " memiliki akses untuk melihat nilai.";
    }
    
}

$dosen1 = new Dosen ("darno", "Inggiris");
echo $dosen1->aksesFitur();
echo "<br>";

$mahasiswa1 = new Mahasiswa ("Baron", "230302044", "Komputer dan Bisnis");
echo $mahasiswa1->aksesFitur();
 ?>