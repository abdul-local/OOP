<?php

class Student
{
    // bisa menambahkan property dan method
    // pada saat membuat properti dalam kelas selalu di dahului dengan var
    var $name;
    var $country = 'None';

    // kita buat method sendiri
    function sayhello(){
        return "Hello, World";
    }
}
// kita bisa membuat instance class
$student1= new Student;
$student1->name="abdul";
echo $student1->name."<br>";
echo $student1->sayhello()."<br>";

// echo $student1->first_name;
// kita juga bisa nembahkan kelas lagi
// instance itu sebenernya suatu object yang dibuat dari kelas yang sudah di definisikan
$student2= new Student;
$student2->name="luna";
echo $student2->sayhello()."<br>";
echo $student2->name."<br>";
// mengambil method pada class Student kemudia kita simpan ke $class_methods
$class_methods = get_class_methods('Student');
echo "Method  milik Student: ";
echo "<pre>";
print_r($class_methods);
echo "</pre>";
// pengecekan apakah ada Method sayhello di kelas Student
//paramter 1 =>untuk nama kelas
//parameter kedua untuk nama Method

if(method_exists('Student','sayhello'))
    echo "Methods sayhellow tersedia";
else
    echo "Methode sayhellow tidak ada";