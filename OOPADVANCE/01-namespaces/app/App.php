<?php
// namespce itu virtual directory
namespace App;
//memanggil file model
include '../models/Model.php';
// kita gunakan class Model dan kita ubah nama clasnya
use Model\Table as ModelTable;

//buat class
class Table{

    public static function get(){
        echo " App.Table.get()"."<br>";

    }
}
// coba panggil metod di class App
Table::get();
// kita panggil metod di Class Model
ModelTable::get();

?>