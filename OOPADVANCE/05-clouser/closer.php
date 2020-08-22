<?php
// mecari data genap dari dari variable array yang udah di sediakan


$array=[1,2,3,4,5,6,7,8,9];

$even= array_filter($array, function($item){

    return ($item % 2 == 0);}
);

echo print_r ($even)."<br>";
echo print_r ($array)."<br>";

// kita buat filter Item

$filter = function($item){

    // kembalikan nilai jika di bagi 2 sisanya 1
    return ($item % 2 == 1);

};
$odd= array_filter($array,$filter);
echo print_r($odd);

?>