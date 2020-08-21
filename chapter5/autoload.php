<?php 
//buat fungsi myAutoload
function myAutoload($class){
    // kita kondisikan jika di temukan kata dari A samai Z yang sama ada kaa
    if(preg_match('/\A\w+\Z/',$class)){
        //maka akan kita includ
        include 'clasess/' .$class . ".php";
    }
}
// ini printah untuk register fungsi yang sudah kita buat
spl_autoload_register('myAutoload');
$student = new Student;
echo $student->student."<br>";
$cat= new Cat;
echo $cat->cat."<br>";
// cetak method di class student
echo $student->sayme()."<br>";
// cetak method di class cat
echo $cat->saycat()."<br>";



?>