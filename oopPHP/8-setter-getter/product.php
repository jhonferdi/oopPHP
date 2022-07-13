<?php

class Product {
    private  $judul,
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

    public function getInfoProduct(){
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

        $str = "Komik : " . parent::getInfoProduct() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}


class Game extends Product{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $waktuMain=0){

        parent::__construct( $judul, $penulis, $penerbit, $harga);

        $this->$waktuMain = $waktuMain;
    }

    public function getInfoProduct(){

        $str = "Game : " . parent::getInfoProduct() . " - {$this->waktuMain} Jam.";
        return $str;
    }
}

class PrintInfoProduct{
    public function cetak(Product $product){
        $str = "{$product->judul} | {$product->getLabel()} | (Rp. {$product->harga})";
        return $str;
    }
}

$product1 = new Komik("JJK", "Nikola Tesla", "Jhon Company", 69000, 100, 0);
$product2 = new Game("AOT", "Vladimir Al Putin", "Stalin Industry", 90000, 0, 50);

//output product
echo $product1->getInfoProduct();
echo "<br>";
echo $product2->getInfoProduct();

echo "<hr>";

$product2->setDiskon(75);
echo $product2->getHarga();

echo "<hr>";

echo $product1->getPenulis();