<?php

class Mahasiswa{
 public static $prodi = ['Manajemen Informatika','Teknologi Informasi', 'Komputerisasi Akutansi'];
 private static $jumlah_mhs = 50;
 
 public static function say($nomor){
    return self::$prodi[$nomor];
 }
 public static function count(){
    return self::$jumlah_mhs;
}

}
echo Mahasiswa::say(0). "<br/>";
echo Mahasiswa::$prodi[2] . "<br/>";
echo Mahasiswa::count();
?>