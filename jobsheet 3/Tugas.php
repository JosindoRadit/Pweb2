<?php
// Abstract class person1 sebagai parent class untuk mahasiswa dan dosen
abstract class person1 {
    protected $nama;
     // untuk menginisialisasi atribut nama
    public function __construct($nama){
        $this->nama = $nama;
    }
    // Setter untuk atribut
    public function setNama($nama){
        $this->nama = $nama; 
    }
    // Getter untuk menampilkan atribut nama
    public function getNama(){
        echo "Nama : $this->nama<br>";

    }
    // Abstract method getRole untuk diimplementasikan oleh subclass
    abstract public function getRole();


}
// Kelas mahasiswa yang mewarisi dari person1
class mahasiswa extends person1{
    private $nim;
    private $jurusan;
    // Memanggil konstruktor parent class
    public function __construct($nama, $nim, $jurusan){
        parent:: __construct($nama);
        $this->nim = $nim;
        $this->jurusan = $jurusan;



    }
     // Setter untuk atribut NIM
    public function setNim($nim){
        $this->nim = $nama;
    }
    // Setter untuk atribut jurusan
    public function setJurusan($jurusan){
        $this->jurusan = $jurusan;
    }
    // Method untuk menampilkan data mahasiswa
    public function getData(){
        parent:: getNama();
        echo "NIM : $this->nim<br> Jurusan : $this->jurusan<br>";


    }
    // Implementasi method getRole untuk mahasiswa
    public function getRole(){
        echo "Mahasiwa<br>";
    }

}
// Kelas dosen yang mewarisi dari person1
class dosen extends person1{
    private $nidn;
    private $MataKuliah;
    // Konstruktor untuk menginisialisasi atribut nama, NIDN, dan mata kuliah
    public function __construct($nama, $nidn, $MataKuliah){
        parent:: __construct($nama);
        $this->nidn = $nidn;
        $this->MataKuliah = $MataKuliah;
    }
    // Setter untuk atribut NIDN
    public function setNidn($nidn){
        $this->nidn = $nidn;
    }
    public function getNidn(){
        return $this->nidn;
    }
    // Setter untuk atribut mata kuliah
    public function setMataKuliah($MataKuliah){
        $this->MataKuliah = $MataKuliah;
    }
    // Method untuk menampilkan data dosen
    public function getData(){
        parent:: getNama();
        echo "NIDN : $this->nidn <br> MataKuliah : $this->MataKuliah <br>";
    }
    // Implementasi method getRole untuk dosen
    public function getRole(){
        echo "Dosen<br>";
    }

}
// Abstract class jurnal sebagai parent class untuk jurnalMahasiswa dan jurnalDosen
abstract class jurnal{
    abstract public function jurnal();

} 
// Kelas jurnalMahasiswa yang mewarisi dari jurnal
class jurnalMahasiswa extends jurnal{
    public function jurnal(){
        echo "Jurnal Mahasiswa<br><br>";
    }

}
// Kelas jurnalDosen yang mewarisi dari jurnal
class jurnalDosen extends jurnal{
    public function jurnal(){
        echo "jurnal Dosen";
    }
}
// Membuat objek mahasiswa dan menampilkan perannya dan datanya
$mahasiswa1 = new mahasiswa ("darno", "2637274", "komputer dan bisnis");
$mahasiswa1->getRole();
$mahasiswa1->getData();
// Membuat objek jurnal mahasiswa dan menampilkan jenis jurnal
$JrnlMhs1 = new jurnalMahasiswa();
$JrnlMhs1->jurnal();
// Membuat objek dosen dan menampilkan perannya dan datanya
$dosen1 = new dosen("coba","1234","matematika");
$dosen1->getRole();
$dosen1->getData();
// Membuat objek jurnal dosen dan menampilkan jenis jurnal
$JrnlDsn1 = new jurnalDosen();
$JrnlDsn1->jurnal();


?>