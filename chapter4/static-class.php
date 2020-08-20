<?php

// membuta kelas baru dengan memperaktikan Static Property dan Static Method
class Siswa{
    // property statict 
    public static $sekolah=['SD','SMP','SMA'];
    private static $jumlah=0;
    // methode statict
    public static function jumlahsiswa(){
        return self::$jumlah;
    }
    // kita buat method tambah jumalah
    public static function tambah(){
        return self::$jumlah++;
    }
    // buat methode yang menampilkan tulisan dengan kata learn OOP PHP
    public static function tulisan(){
        return "Learn OOP PHP";

    }


}

// nah sekarang ya mau coba untuk tampilkan semuanya isi di class siswa itu
echo Siswa::$sekolah[0]."<br>";
// menampilkan nilai method tulisan
echo Siswa::tulisan()."<br>";


// menampilkan nilaimethod jumlah siswa 
echo Siswa::jumlahsiswa()."<br>";
// panggil methode jumlah
Siswa::tambah();

// cetak nilai method tambah
echo Siswa::tambah()."<br>";


?>