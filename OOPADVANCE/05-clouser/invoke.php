<?php

// buat class
class IsIntPosistif{

    // buat megic method
    public function __invoke($nilai)
    {
        return ((int) $nilai == $nilai && $nilai >0);
    }

}
// buat instance
$invoke =  new IsIntPosistif;

echo var_dump($invoke(1))."<br>";
echo var_dump($invoke('4'))."<br>";
echo var_dump($invoke('abdul'))."<br>";

echo var_dump($invoke(-1))."<br>";

?>