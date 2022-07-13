<?php

// class ContohStatic {
//     public static $angka = 2;

//     public static function hei(){
//         return "halo." . self::$angka++ . "kali.";
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::hei();

class Contoh {
    public static $angka = 2;

    public function hei(){
        return "halo " . self::$angka++ . "kali <br>";

    }
}

$obj = new Contoh;

echo $obj->hei();
echo $obj->hei();
echo $obj->hei();

echo "<hr>";

$obj2 = new Contoh;

echo $obj2->hei();
echo $obj2->hei();
echo $obj2->hei();
