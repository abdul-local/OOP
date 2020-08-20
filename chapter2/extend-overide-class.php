<?php
//mendefinisikan subkelas menggunakan 
class User {
    // property
    var $first_name;
    var $last_name;
    var $username;
    //Method
    function fullname(){
        return $this->first_name.' '.$this->last_name;
    }

}
// membuat subclass dengan printah extends
// class Constumer mewarisi sifat class User yang di sebut dengan Inheritance
class Constumer extends User{
    var $kota;
    var $negara;
    function lokasi(){
        return $this->negara.' '.$this->kota;
    }
    function fullname(){
        return $this->first_name.' '.$this->last_name."(Constumer)";
    }

}
// kita mau buat instance dari class Constumer
$c = new Constumer;
// kita coba buat instance class dari User
$u=new User;
// kita isikan first_name
$u->first_name="abdul";
$u->last_name="programer";
// isikan property kota
$u->kota='Lombok';
$u->negara='indoneia';
//menampilkan nilai fullname
echo $u->fullname()."<br>";
//echo $u->lokasi()."<br>";

// kita isikan first_name
$c->first_name="Constumer";
$c->last_name="programer";
// isikan property kota
$c->kota='Lombok';
$c->negara='indoneia';
//menampilkan nilai fullname
echo $c->fullname()."<br>";

//menampilkan nilai lokasi
echo $c->lokasi()."<br>";

// kita mau ngecek apakah Constumer ini subclass dari User dengan meggunakan printah is_subclassof(paramter)
// parameter pertama mengacu dengan variabel
// paramter kedua mengacu dengan nama class

if(is_subclass_of($c,'User'))
    echo " Instance Constumer merupakan Inheritence dari User";
else
    echo "Instance Constumer tidak Inheritence dari User";

// kita juga bisa mengecek class_parents
$parents= class_parents($c);
// kita ingin menampilkannya dalam bentuk string agar mudah di baca maka kita bia menggunakan impplode

echo implode(',',$parents);



?>