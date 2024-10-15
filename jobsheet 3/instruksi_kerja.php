<?php
// Mendefinisikan kelas abstrak 'person' dengan properti terlindungi $name dan konstruktor.
abstract class person {
    protected $name;
    // Konstruktor untuk menginisialisasi properti name.
    public function __construct($name){
        $this->name = $name;
    }
    // Metode setter untuk properti name.
    public function setName($name){
        $this->name = $name;

    }
    // Metode abstrak yang akan diimplementasikan pada kelas turunan.
    abstract public function getName();
}
// Mendefinisikan kelas 'student' yang memperluas kelas 'person'.
class student extends person {
    private $studentID;
    // Konstruktor yang menginisialisasi name (melalui parent) dan properti studentID.
    public function __construct($name, $studentID){
        parent:: __construct ($name);
        $this->studentID = $studentID;
        
    }
     // Metode setter untuk properti studentID.
    public function setStudentID($studentID){
        $this->studentID = $studentID;
        
    }
    // Metode untuk mencetak studentID. 
    public function getStudentID(){
        echo "ID : $this->studentID<br>";

    }
    // Implementasi metode abstrak getName dari kelas 'person'.
    public function getName(){
        echo "name : $this->name<br>";
    }
}
// Mendefinisikan kelas 'teacher' yang juga memperluas kelas 'person'.
class teacher extends person{
    public $teacherID;
    // Konstruktor yang menginisialisasi name (melalui parent) dan properti teacherID.
    public function __construct($name, $teacherID){
        parent:: __construct($name);
        $this->teacherID = $teacherID;
    }
    // Implementasi metode abstrak getName() dari kelas 'person'.
    public function getName(){
        echo "name : $this->name<br>";
    }
}
// Mendefinisikan kelas abstrak 'course' dengan metode abstrak getCourseDetails.
abstract class course{
    abstract public function getCourseDetails();
}
// Mendefinisikan kelas 'OnnlineCourse' yang memperluas 'course'.
class OnnlineCourse extends course{
    public function getCourseDetails(){
        echo "onnline<br>";
    }
}
// Mendefinisikan kelas 'OfflineCourse' yang memperluas 'course'.
class OfflineCourse extends course{
    public function getCourseDetails(){
        echo "offline<br>";
    }
}
// Membuat objek student dan teacher dengan data sampel.
$pelajar2 = new student ("karno", "98");
$guru2 = new teacher ("karni", "55");
// Memanggil metode getName() untuk kedua objek.
$pelajar2->getName();
$guru2->getName();

// Membuat objek course dan menampilkan tipe kursus.
$Onnline1 = new OnnlineCourse();
$Offline1 = new OfflineCourse();
$Onnline1->getCourseDetails();
$Offline1->getCourseDetails();

?>