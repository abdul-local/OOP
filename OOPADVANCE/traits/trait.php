<?php

// kita buat traid
// catatan penting: menggunaka trait itu lebih mudah mengambil filenya 
//
trait Log
{
    // buat method dengan viibilitas protected
    private function logger($pesan){

        // cetak nilai di paramter method logger
        echo "{$pesan}"."<br>";
    }

}
// kita clsss
class Table{
    // kita implementasikan trait yang udah kita buat tadi
    use Log;
    // kita buat method
    public function save(){

        // kita panggil method yang ada di traid Log
        $this->logger(" Create log broo ");

    }
}
echo (new Table)->save();

?>