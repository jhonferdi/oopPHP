<?php
class Product {
    public  $jenis = "jenis",
            $nama = "nama",
            $harga = 0,
            $jumlah = 0;
    public function getLabel(){
       return "$this->jenis, $this->nama, $this->harga, $this->jumlah";
    }
}

$product1 = new Product();
$product1->jenis = "makanan";
$product1->nama = "taichan";
$product1->harga = 15000;
$product1->jumlah = 2;

$product2 = new Product();
$product2->jenis = "makanan";
$product2->nama = "tahu gejrot";
$product2->harga = 8000;
$product2->jumlah = 1;

echo $product1->getLabel();
echo "<br>";
echo $product2->getLabel();
