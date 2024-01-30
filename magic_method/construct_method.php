<?php
//Belajar Construct method
//Construct method adalah magic method
//Dimana method tersebut dapat berjalan/terinisialisasi sendiri ketika dipicu oleh suatu event

class baseClass{
    public static $hitungChildClass = 0 ; //default nilai 0

    //deklarasi construc method (harus berupa public function)
    public function __construct() {
        self::$hitungChildClass++; //ketika baseClass digunakan sebagai parent, maka property $hitungChildClass akan mendapat iterasi +1
    }
}

//deklarasi child pertama class dari baseClass
class child1 extends baseClass{
    public $total = 3 . "siswa";
}

//deklarasi child kedua class dari baseClass
class child2 extends baseClass{
    public $total = 5 . "siswa";
}

//deklarasi child ketiga class dari baseClass
class child3 extends baseClass{
    public $total = 2 . "siswa";
}

//memicu construct class berjalan dengan membuat object dari masing2 childClass
$junior1 = new child1();
$junior2 = new child2();
$junior3 = new child3();

//property $hitungChildClass dari baseClass akan teroveride iterasi+1 sesuai objek yang diinisialisasi
echo "Kita memiliki ". baseClass::$hitungChildClass ." objek Child Class";

?>