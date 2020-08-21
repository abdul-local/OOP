<?php

//buat class
class Product{
    //buat property
    public $color;
    //buat magic method construct
    public function __construct(){
        // cetak tulisan
        echo "New product was created"."<br>";
    }

    // buat magic method __clone buat duplicat
    public function __clone(){
        //cetak tulisan
        echo "New product was clone "."<br>";
    }


}
// buat instance
$shirt1= new Product;
$shirt1->color="blue";

// duplicat instance 1 beserta nilainnya
//buat instance 2
$shirt2 = clone ($shirt1);
echo $shirt1->color."<br>";
echo $shirt2->color."<br>";
echo "<hr>";

//Ubah warna shirt2 yang semula jadi blue jadi red
$shirt2->color="red";
echo $shirt1->color."<br>";
echo $shirt2->color."<br>";



?>