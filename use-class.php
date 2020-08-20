<?php
// catatan penting menggunakan instance
//Di luar class : $variable ->
// Di dalam class: $this->



// buat class person

class Person {
    var $first_name;
    var $last_name;
    function fullname(){
        // kita  first_name dan last_name di dalam kelas itu sendiri maka kita gunkan this
        return $this->first_name . ' '.$this->last_name;
    }
}
// buat instnce
$siswa= new Person;
// inputkan masing-masing nilai pada property
$siswa->first_name="abdul";
$siswa->last_name="hamzan";
// cetak nilai first_name
echo $siswa->first_name."<br>";
echo $siswa->last_name."<br>";
echo $siswa->fullname();

?>