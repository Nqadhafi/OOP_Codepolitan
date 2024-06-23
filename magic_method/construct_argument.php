<?php
class Product{
    public $nama;
    public $warna;
    public $harga;

    public function __construct($params=[]){
        $this->nama = $params['nama'] ?? NULL;
        $this->warna = $params['warna'] ?? NULL;
        $this->harga = $params['harga'] ?? NULL;
    }
}

$objek = new Product(
    [
        'nama'=> "Masako",
        
        'harga'=> "Rp.5000"
    ]
);

echo $objek->nama;
echo $objek->warna;
echo $objek->harga;
?>