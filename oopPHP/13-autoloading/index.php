<?php

require_once 'App/init.php';

$product1 = new Komik("JJK", "Nikola Tesla", "Jhon Company", 69000, 100);
$product2 = new Game("AOT", "Vladimir Al Putin", "Stalin Industry", 90000, 12);

$cetakProduct = new PrintInfoProduct();
$cetakProduct->tambahProduct($product1);
$cetakProduct->tambahProduct($product2);
echo $cetakProduct->cetak();