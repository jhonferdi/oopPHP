<?php
class Product {
    public  $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;

    public function __construct( $judul = "judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman=0, $waktuMain=0, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel(){
       return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    
        if ($this->tipe == "Komik"){
            $str .= " ~ {$this->jmlHalaman} Halaman.";
        } else if ($this->tipe == "Game"){
            $str .= " ~ {$this->waktuMain} Jam.";
        }
        return $str;
    }
}



class PrintInfoProduct{
    public function cetak(Product $product){
        $str = "{$product->judul} | {$product->getLabel()} | (Rp. {$product->harga})";
        return $str;
    }
}

$product1 = new Product("JJK", "Nikola Tesla", "Jhon Company", 69000, 100, 0, "Komik");
$product2 = new Product("AOT", "Vladimir Al Putin", "Stalin Industry", 90000, 0, 50, "Game");

echo $product1->getInfoLengkap();
echo "<br>";
echo $product2->getInfoLengkap();