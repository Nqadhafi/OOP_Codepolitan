<?php

class belajarKonstan{
    //Deklarasi property konstan, memakai huruf kapital tanpa $
    public const DAY = 60 * 60 *24;

    public function besok(){
        return time() + self::DAY; //pemanggilan porperty konstan
    }
}
echo belajarKonstan::DAY . "<br/>"; //pemanggilan property konstan tanpa instance

//inisialisasi object class
$besok =  new BelajarKonstan();
//pemanggilan method
echo $besok->besok();



?>