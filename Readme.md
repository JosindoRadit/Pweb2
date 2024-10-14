# PWEB2
### Pertemuan 1-2

## <center>JOBSHEET 1</center>
## #Instruksi Kerja
``` php
<?php
//menambahakan Atribut dan Metode
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;


    }

    public function tampilakanData() {
        return "Saya $this->nama, dengan $this->nim, dari $this->jurusan.";

    }


    public function updateJurusan($newJurusan) {
        $this->jurusan = $newJurusan;
    }

    public function setNim($newNim){
        $this->nim = $newNim;
    }


}
$mahasiswa1 = new mahasiswa("JosindoRaditAlbaran", "230302064", "TeknikInformatika");
echo $mahasiswa1->tampilakanData();
echo $mahasiswa1->updateJurusan("Mesin");
echo $mahasiswa1->tampilakanData();
echo $mahasiswa1->setNim("230302076");
echo $mahasiswa1->tampilakanData();
?>
```
## 1. Membuat Class Mahasiswa
Membuat class mahasiswa, memiliki atribut yang berisi Nama, NIM, Jurusan.

```php
//menambahakan Atribut dan Metode
class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;
}
```
## 2. Penggunaan method constractor

Membuat Method constructor yang digunakan untuk menganalisis data atribut pada claas dosen.
```php
public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
}
```

## 3. Penggunaan method TampilData
Membuat Method tampilkanDosen yang digunakan untuk menampilkan Atribut atau isi Atribut pada class dosen.
```php
public function tampilakanData() {
        return "Saya $this->nama, dengan $this->nim, dari $this->jurusan.";
}
```
## 4. Penggunaan method updateJurusan

Mengubah value dari jurusan pada atrubut dalam class mahasiswa
```php
public function updateJurusan($newJurusan) {
        $this->jurusan = $newJurusan;
    }
```
## 5. penggunaan method setNim
digunakan untuk mwngisi nim pada atribut
```php
public function setNim($newNim){
        $this->nim = $newNim;
    }
```
## 6.  Menampilkan Informasi Mahasiswa
Method ini digunakan untuk menamplkan informasi mahasiswa.
```php
$mahasiswa1 = new mahasiswa("JosindoRaditAlbaran", "230302064", "TeknikInformatika");
echo $mahasiswa1->tampilakanData();
echo $mahasiswa1->updateJurusan("Mesin");
echo $mahasiswa1->tampilakanData();
echo $mahasiswa1->setNim("230302076");
echo $mahasiswa1->tampilakanData();

```

## Hasil Pembuatan Class mahasiswa
<img src="img/hubu.PNG" >

## #Pembuatan Class Dosen
```php
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
```

## 1. Membuat Class Dosen
Membuat Class dosen, memiliki atribut yang berisi Nama, Nip, Mata Kuliah.

```php
class Dosen {
    public $nama;
    public $nip;
    public $mataKuliah;
}
```

## 2. Membuat Method Constructor
Membuat Method constructor yang digunakan untuk menganalisis data atribut pada claas dosen.

```php
//constructor
public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;

}
```

## 3. Membuat Method TampilDosen
Membuat Method tampilkanDosen yang digunakan untuk menampilkan Atribut atau isi Atribut pada class dosen.

```php
//TampilDosen
public function tampilkanDosen() {
        return "Dosen : $this->nama<br> Nip : $this->nip<br> mataKuliah : $this->mataKuliah.";

    }
```

## 4.  Menampilkan Informasi Dosen
Method ini digunakan untuk menamplkan informasi dosen.

```php
//Menampilkan informasi dosen
$dosen1 = new Dosen("JosindoRaditAlbaran", "234563213", "Matamatika");
echo $dosen1->tampilkanDosen();
```

## Hasil Pembuatan Class dosen
<img src="img/hirh.PNG" >
