<?php

class contohMethod{
    var $nama_depan = "Nanda Qadhafi"; //Property nama
    var $nama_belakang = "Luhur Al-Ashr"; //Property nama

    //revisi memakai konsep oop yang benar
    // function SayHello($namaku){
    //     echo "Hallo bos " . $namaku; //Method say hello
    // }
    function SayHello(){
        return $this->nama_depan . " " . $this->nama_belakang; //memanggil variable yang masih dalam satu class dengan "this"
    }
}
$panggil = new ContohMethod; //Pembuatan object dari class contohMethod
echo $panggil->SayHello(); //Pemanggilan method SayHello