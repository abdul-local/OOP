<?php

class Student
{
    // bisa menambahkan property dan method
    // pada saat membuat properti dalam kelas selalu di dahului dengan var
    var $name;
    var $country = 'None';
}
// kita bisa membuat instance class
$student1= new Student;
$student1->name="abdul";
echo $student1->name."<br>";

// echo $student1->first_name;
// kita juga bisa nembahkan kelas lagi
// instance itu sebenernya suatu object yang dibuat dari kelas yang sudah di definisikan
$student2= new Student;
$student2->name="luna";

echo $student2->name."<br>";
// mengambil dan menampilkan varibael di class maka kita bisa menggunakan fugsi get_class_vars('nama kelas)

$class_var = get_class_vars('Student');
echo "Properti milik Student: ";
echo "<pre>";
print_r($class_var);
echo "</pre>";
// pengecekan apakah ada property name di kelas Student
//paramter 1 =>untuk nama kelas
//parameter kedua untuk nama propery

if(property_exists('Student','name'))
    echo "Property nama tersedia";
else
    echo "Property nama tidak ada";
?>