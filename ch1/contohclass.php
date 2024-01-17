<?php
class Mahasiswa{

}

$namaClasses = ['Mahasiswa', 'Dosen', 'mahasiswa'];

foreach($namaClasses as $namaClass){
    if(class_exists($namaClass)){
            echo $namaClass . " class ada <br/>";
    }
    else{
        echo $namaClass . " class tidak ada <br/>";
    }
}

?>