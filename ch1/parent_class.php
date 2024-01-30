<?php

class userProfile{
    public static $verified = true;
    public static function imageSize(){
        return "600x600";
    }
}

class checkResolution extends UserProfile{
   public static function imageSize(){
    if(self::$verified){
        return parent::imageSize(); //Memanggil fungsi imageSize(),merujuk pada class userProfile tanpa mengubah nilai awal
    } 
    else{
        return "Salah bos!";
    }
   }
}

echo checkResolution::imageSize() . "<br/>";
UserProfile::$verified = false;
echo checkResolution::imageSize() . "<br/>";

 ?>