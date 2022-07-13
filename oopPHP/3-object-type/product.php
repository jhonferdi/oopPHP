<?php
class Product {
    public  $jenis,
            $nama,
            $harga,
            $jumlah;

    public function __construct( $jenis, $nama, $harga, $jumlah)
    {
        $this->jenis = $jenis;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->jumlah = $jumlah;
    }

    public function getLabel(){
       return "$this->nama, $this->harga";
    }
}

class PrintInfoProduct{
    public function cetak(Product $product){
        $str = "{$product->jenis} | {$product->getLabel()} | {$product->jumlah}";
        return $str;
    }
}

$product1 = new Product("makanan", "taichan", 15000, 2);
$product2 = new Product("makanan","tahu gejrot", 8500, 1);

echo $product1->getLabel();
echo "<br>";
echo $product2->getLabel();
echo "<br>";
$infoProduct1 = new PrintInfoProduct();
echo $infoProduct1->cetak($product1);
