<?php

//Deklarasi Class
class contohInstance{
    var $nama; //Deklarasi property nama
    var $nim; //Deklarasi property nim
    var $kota = "none"; //Deklarasi property kota

}

$contoh1 = new contohInstance; //membuat object 1 dari class contohInstance
$contoh2 = new contohInstance; //membuat object 2 dari class contohInstance

$contoh1->nama = "nanda"; //Pemberian value propery nama dari object 1
$contoh1->nim = 2212030572; //Pemberian value propery nim dari object 1

$contoh2->nama = "gak tau"; //Pemberian value propery nama dari object 1
$contoh2->nim = 2212030544;
echo $contoh1->nama . " " . $contoh1->nim . " " . $contoh1->kota . "<br/>"; //Pemanggilan property dalam object 1
echo $contoh2->nama . " " . $contoh2->nim . " " . $contoh2->kota . "<br/>";//Pemanggilan property dalam object 1


$tampilproperti = get_class_vars('contohInstance'); //fungsi menampilkan properti yang tersedia dalam class contohInstance
echo "<pre>";
print_r($tampilproperti);
echo "</pre>";

?>