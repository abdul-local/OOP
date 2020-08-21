<?php
// kita panggul class Autoload untuk registerasi filenya
require __DIR__ .'/vendor/autoload.php';
// untuk membaca file tersebut kita gunakan namspace Faker
use Faker\Factory;

// kita akse metode create dari class Factory dan di simpan dalam sebuah varibe; yg di sebut dengan faker
$faker= Factory::create();

// ceak varibel nama di class Factory
echo $faker->name."<br>";
// kita cetak alamat pada classs Factory

echo $faker->address."<br>";





?>