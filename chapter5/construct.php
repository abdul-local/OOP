<?php
// catatan untuk magic method
// __construct() , __clone(), __clone(),__destruct(),__set(),__get();
// catatan penting method __construct selalu bekerja otomatis sebelum kita panggil

// buat class 
class Student{
    // buat property instanceCount
    public static $instanceCount= 0;

    // gunakan method _construct wajib di ikuti public
    public function __construct(){
        // nilai dari property $instanceCount kita tambah 1
        self::$instanceCount ++;
    }
}
// buat subclass
class Elementary extends Student{
    // isikan property 
    public $total=3;
}
class Junior extends Student{
    // isikan property
    public $total=2;
}

class Senior extends Student{
    // isikan property
    public $total=4;
}

// buatkan instance untuk Elementary
$elementary = new  Elementary;
// tampilkan milai $totalnya

echo " Elementary : {$elementary->total} "."<br>";

//buat Instance untuk subclas Junior
$junior = new Junior;
// tampilkan nilai totalnya
echo "Junior: {$junior->total}"."<br>";
//buat instance untuk subclass senior
$senior = new Senior;
// tampilkan nilai totalnya
echo "Senior: {$senior->total}"."<br>";

// tampilkan nilai instance Count 
echo " InstanceCount:".Student::$instanceCount."<br>";



?>