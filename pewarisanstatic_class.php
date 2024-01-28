<?php

class Mahasiswa{

    public static $kelas = ['1B', '1F', '1G', '1H'];
}

class kelasKaryawan extends Mahasiswa{
  static function tambah(){
    return self::$kelas[] = '1E';
  }
}
kelasKaryawan::tambah();
echo implode(', ', kelasKaryawan::$kelas);
?>