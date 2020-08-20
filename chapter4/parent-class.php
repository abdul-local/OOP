<?php 
class Programer{
    public static function makeSystem(){
        echo " Start Coding";
    }
}

class armatureProgramer extends Programer{

    // kita buat method
    public static function makeSystem(){
        echo "Read Documentation "."<br>";
        // kita gunnakan fungsi parent untuk mengambil nilai dari method makeSystem di class programer
        parent::makeSystem()."<br>";
        // cetak tulisan clean up
         echo " Clean Up mess"."<br>";
    }

}
// saya panggil method makeSystem di class Programer
echo Programer::makeSystem()."<br>";
echo "ArmatureProgramer:"."<br>";
 echo armatureProgramer::makeSystem()."<br>";

 // kita praktik buat class baru lagi
 class Image{
     // buat property baru
     public static $ukuran=true;
     // buat method baru
     public static function geometry(){

        echo " 512 X 512";
     }

 }
// buat subclass

class Photoprofile extends Image{
    // buat methode
    public static function geometry(){
        if(self::$ukuran){
            // tampilkan ukurannya
            echo " 50 X 50";
        }else {
            parent::geometry();
        }

    }
}

// cetak method geomtry di class Imag
echo Image::geometry()."<br>";
echo Photoprofile::geometry()."<br>";
// kita ubah property $ukuran yang semula bernilai true jadi false

Image::$ukuran=false;
// cetak nilainya
echo Image::geometry()."<br>";



?>