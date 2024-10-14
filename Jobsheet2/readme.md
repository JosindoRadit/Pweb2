# PWEB2
### Pertemuan 3-4

## <center>JOBSHEET 2</center>
## #Instruksi Kerja
## 1. Membuat Class Mahasiswa
Membuat class mahasiswa, memiliki atribut yang berisi Nama, NIM, Jurusan.

```php
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
}

$mahasiswa1 = new mahasiswa("JosindoRaditAlbaran", "230302064", "TeknikInformatika");
echo $mahasiswa1->tampilakanData();

?>

```
## Output
<img src='img/cb.png'>



## 2. Encapsulation
adalah cara “membungkus” data dan method yang menyusun kelas sehingga
kelas dapat dipandang sebagai suatu modul dan menyembunyikannya dari dunia
luar.
```php
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
?>
```
## Output

## 3. Inheritance
adalah konsep dalam Bahasa berorientasi objek yang memungkinkan sifat dari
suatu class diturunkan kepada class lain dalam sebuah hierarki class.

```php
<?php
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

}

$mahasiswa2 = new Dosen(nama : "KUYA", mataKuliah : "Inggris");
$mahasiswa2->getNama();
$mahasiswa2->getmataKuliah();

?>
```
## Output

## 4. Polymorphism
adalah konsep dalam Bahasa berorientasi objek yang
memungkinkan banyak class dengan fungsi berbeda untuk
mengeksekusi atau berbagi antarmuka yang sama.

```php
<?php
    class pengguna {
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
```
## Output