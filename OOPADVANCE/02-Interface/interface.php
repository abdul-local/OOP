<?php
//buat interface dengan nama Tableinterface

interface TableInterface{
    // buat method
    public function save(array $data);

}
// kita buat interface baru 
interface LogInterface{

    // buat method
    public function log(string $pesan);
}


// kita buat sebuah class dengan nama Tabel dan di dalam kelas tsb kita masukan interface

class Table implements TableInterface,LogInterface {
    // buat metode
    public function save(array $data){
        return " save method table class"."<br>";
    }
    // kita panggil method yang ada di interface logInterface
    public function log(string $pesan){
        // isikan nilainnya
        return $pesan."<br>";
    }
}
// kita panggil nilai save pada kelas Table

echo (new Table)->save([]);
echo (new Table)->log('Hallo, welcome to how to use interface');

?>