<?php
// materi construct_Argument
// catatan untuk magic method
// __construct() , __clone(), __clone(),__destruct(),__set(),__get();
// catatan penting method __construct selalu bekerja otomatis sebelum kita panggil
// catatan juga , bersifat magic method maksudnya bekerja secara otomatis

// buat class 
class Student{
    // buat property instanceCount
    public static $instanceCount= 0;
    public $total;
    public $target;

    // gunakan method _construct wajib di ikuti public
    public function __construct($args=[]){
        // nilai dari property $instanceCount kita tambah 1
        self::$instanceCount ++;
        $this->total=$args['total'] ?? $this->total;
        $this->target=$args['target'] ?? $this->target;
    }
    // buat magic metod __destruct
    public function __destruct(){
        // echo " Good by, !!"."<br>";
        // kita akan coba menguranginnya satu dengan nilai sebelumnya
        self::$instanceCount--;
    }
}
// buat subclass
class Elementary extends Student{
    // isikan property 
    public $total=3;
    public $target=2;

}
class Junior extends Student{
    // isikan property
    public $total=2;
    public $target=3;
}

class Senior extends Student{
    // isikan property
    public $total=4;
    public $target=1;
}

// buatkan instance untuk Elementary dan berikan nilainnya
$elementary = new  Elementary(['total'=>2,'target'=>5]);
// tampilkan milai $totalnya

echo " Elementary : {$elementary->total} "."<br>";
// tampilkan nilai target
echo " Elementary : {$elementary->target} "."<br>";

//buat Instance untuk subclas Junior
$junior = new Junior(['total'=>3,'target'=>5]);
// tampilkan nilai totalnya
echo "Junior: {$junior->total}"."<br>";
// tampilkan nilai target
echo "Junior: {$junior->target}"."<br>";

// kita akhiri kelas tsb dengan menapilkan kata good bay dengan perintah unset
unset($elementary);


//buat instance untuk subclass senior
// jika di senior tidak saya berikan nilainya  maka akan mencetak nilai yang ada di sub class nya
$senior = new Senior();
// tampilkan nilai totalnya
echo "Senior: {$senior->total}"."<br>";
echo "Senior: {$senior->target}"."<br>";

// tampilkan nilai instance Count 
echo " InstanceCount:".Student::$instanceCount."<br>";



?>