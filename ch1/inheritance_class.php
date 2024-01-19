<?php
//Inheritance adalah pewarisan, dimana kita bisa menggunakan property/method yang ada di satu class di class lain
//Dengan cara "mewariskanya" dalam subclass


//Contoh
//Mendefinisikan class induk/parent
class iniClassUtama{

    //Property class induk
    var $nama = "Nanda Qadhafi"; 
    var $alamat = "Norwegia";

    //method class induk
    function perkenalan(){
        return "Halo, namaku " . $this->nama . "<br/>" . "Aku berasal dari " . $this->alamat; 
    }
}

//Mendefinisikan class yang "mewarisi" property/method dari class induk
class iniClassNPC extends iniClassUtama{
}

//membuat object merujuk pada class iniClassNPC
$panggil = new iniClassNPC;

//memanggil class iniClassNPC padahal isi classnya kosong
echo $panggil->perkenalan();
?>