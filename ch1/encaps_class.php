<?php
class Mahasiswa{
    private $password; //private property

    //method setter for password
    public function setPassword(){
    $input = "ini password";
    $this->password = $input;
}
    //method getter for password
    public function getPassword(){
    return $this->password;
    }
}

$panggilprivate = new Mahasiswa(); //object declaration
$panggilprivate->setPassword(); //execute setter method
echo $panggilprivate->getPassword(); //call getter method
?>