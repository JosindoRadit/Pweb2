<?php
//menambah atribut dan metode
class Dosen {
    public $nama;
    public $nip;
    public $mataKuliah;

    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
    public function tampilkanDosen() {
        return "Dosen : $this->nama<br> Nip : $this->nip<br> mataKuliah : $this->mataKuliah.";

    }
}
 

$dosen1 = new Dosen("JosindoRaditAlbaran", "234563213", "Matamatika");
echo $dosen1->tampilkanDosen();
?>