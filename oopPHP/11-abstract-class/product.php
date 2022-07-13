<?php

use PrintInfoProduct as GlobalPrintInfoProduct;

abstract class Product {
    private $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon=0;

    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul($judul){
        return $this->judul = $judul;
    }

    public function getJudul(){
        return $this->judul;
    }

    public function setPenulis($penulis){
        return $this->penulis = $penulis;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenerbit($penerbit){
        return $this->penerbit = $penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setHarga($harga){
        return $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    public function getDiskon(){
        return $this->diskon;
    }

    public function getLabel(){
       return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfoProduct();

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    
        return $str;
    }
}

class Komik extends Product{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman=0){

        parent::__construct( $judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduct(){

        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}


class Game extends Product{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $waktuMain=0){

        parent::__construct( $judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduct(){

        $str = "Game : " . $this->getInfo() . " - {$this->waktuMain} Jam.";
        return $str;
    }
}

class PrintInfoProduct{
    public $daftarProduct = array();
    public function tambahProduct(Product $product){
        $this->daftarProduct[] = $product;
    }

    public function cetak(){
        $str = "DAFTAR PRODUCT : <br>";
        
        foreach($this->daftarProduct as $p){
            $str .= "- {$p->getInfoProduct()} <br>";
        }

        return $str;


    }
}

$product1 = new Komik("JJK", "Nikola Tesla", "Jhon Company", 69000, 100);
$product2 = new Game("AOT", "Vladimir Al Putin", "Stalin Industry", 90000, 12);

$cetakProduct = new GlobalPrintInfoProduct();
$cetakProduct->tambahProduct($product1);
$cetakProduct->tambahProduct($product2);
echo $cetakProduct->cetak();