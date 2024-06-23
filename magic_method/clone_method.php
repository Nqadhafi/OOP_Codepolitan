<?php

class Mahasiswa{
    public $nama;

    public function __construct()
    {
            echo "Data mahasiswa telah ditambahkan <br />";
    }
    public function __clone()
    {
        echo "Data Mahasiswa telah di duplikasi <br />";
    }
}

$create = new Mahasiswa();
$create->nama = "Andi";
$create2 =  clone $create;
$create2->nama = "Firman";
echo "Nama Mahasiswa: " . $create->nama . "<br />";
echo "Nama Mahasiswa: " . $create2->nama;
?>