<?php

class Student
{
    // bisa menambahkan property dan method
    // pada saat membuat properti dalam kelas selalu di dahului dengan var
    var $first_name;
    var $last_name;
    var $siswa= false;
    var $country = 'None';
}
// kita bisa membuat instance class
$student1= new Student;
$student1->first_name="abdul";
echo $student1->first_name;
// kita juga bisa nembahkan kelas lagi
// instance itu sebenernya suatu object yang dibuat dari kelas yang sudah di definisikan
//$student2= new Stundent;

$classes= get_declared_classes();
// pengguna implode untuk output data string
echo "Classes: " .implode(', ',$classes). "<br>";

$classNames = ['Product','Student', 'student'];

foreach($classNames as $className){

    if(class_exists($className)){
        echo "{$className} class ada"."<br>";
    }else{
        echo "{$className} class tidak ada"."<br>";
    }
}
?>