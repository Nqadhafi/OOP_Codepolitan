<?php

function kuchiyose($class){
    if(preg_match('/\A\w+\Z/', $class)){
        include 'ch1/path_class/' . $class . ".php";
    }
}

spl_autoload_register('kuchiyose');
$coba = new Dosen();
echo $coba->nama;

?>