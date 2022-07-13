<?php 

// cara 1 define -> tidak bisa disimpan didalam class
define('NAMA', 'Ferdinan Nurvian Wibowo');
echo NAMA;

echo "<br>";

// cara 2 const -> bisa disimpan didalam class
const UMUR = 21;
echo UMUR;


class Coba {
    const NAMA = "Ferdinan";
}

echo Coba::NAMA;

echo __LINE__; // untuk mengetahui baris keberapa 
echo __FILE__; // untuk mengetahui pesan error di file

function Tes(){
    echo __FUNCTION__; // untuk mengetahui di function mana
}

echo Tes();

class What {
    public $kelas = __CLASS__; // untuk mengetahui class mana
}

$obj = new What;
echo $obj->kelas;
