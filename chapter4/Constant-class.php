<?php
class Time{
    // buat constanta
    public CONST DAY= 60*60*24;
    // buat method tomorow
    public function tomorrow(){
        return time()+self::DAY;
    }

}

// Cetak nilai DAY
echo Time::DAY."<br>";
// echo Time::tomorrow();
// kita buat instance untuk mempermudah pemanggilan method tomorow
$waktu= new Time;
echo $waktu->tomorrow();



?>