<?php
//Catatan penting
// kita tidak bisa menggunakan visibilitas protected untuk di luar class, tapi hanya di gunakan di dalam kelas itu sendiri

class User {
    // property mengunakan varibek public
    public $first_name;
    public $last_name;
    public $username;

    protected $regID=1001;
    private $level ='User';

    //Method
    function fullname(){
        return $this->first_name.' '.$this->last_name;
    }
    // membuat fungsi dengantipe protected
    protected function sayprotected(){
        return "Hello, Protected";
    }
    // catatan private hanya bisa digunakan di dalam kelas itu sendiri
    private function sayprivated(){
        return "Hello, Privated";
    }

    //kita buat public fungsi
    public function sayme(){
        return $this->sayprivated();
    }

}
// membuat class baru dengan nama produk
class Produk{
    private $name;
    // buat method untuk menambahkan nilainya
    public function setname($nilai){
        return $this->name=$nilai;
    }
    // buat method untuk menampilkan namanya
    public function getname(){
        return $this->name;
    }
}



// membuat subclass dengan printah extends
// class Constumer mewarisi sifat class User yang di sebut dengan Inheritance
class Constumer extends User{
    public function sayParent(){
        return $this->sayprotected();
        //coba kita panggil yang metod sayprivated i class utama dan ternyata tidak bisa di panggil
        // return $this->sayprivated();
    }

}
// kita buat instence untuk User
$u= new User;
$u->first_name='class';
$u->last_name='User';
// cetak nilai fullname
echo $u->fullname()."<br>";
// cetak regID tidak bisa di lakukan karena di luar kelas 
// echo $u->regID."<br>";
// cetak nilai level juga tidak bisa di lakukan di luar kelas
// echo $u->level."<br>";

// ini juga tidak bisa di panggil di luar kelas
// echo $u->sayprotected()."br";

// ini juga tidak bisa di panggil di luar kelas
// echo $u->sayprivated()."br";


// kita mau buat instance dari class Constumer
$c = new Constumer;
// kita isikan first_name
$c->first_name="Contumer";
$c->last_name="abdul";
echo $c->fullname()."<br>";
// cetak nilai Method sayParent
echo $c->sayParent()."<br>";
echo $c->sayme()."<br>";
// nah sekarang kita mau coba akses untuk class produk;
$produk = new Produk;
//tulis nilainya
$produk->setname("PHP");
// tampilkan name di private itu
echo $produk->getname();



?>