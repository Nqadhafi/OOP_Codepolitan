<?php

class contohMethod{
    var $nama = "Nanda Qadhafi"; //Property nama

    function SayHello($namaku){
        echo "Hallo bos " . $namaku; //Method say hello
    }
}
$panggil = new ContohMethod; //Pembuatan object dari class contohMethod
echo $panggil->SayHello($panggil->nama); //Pemanggilan method SayHello dengan skup variable property nama
?>