<?php 

// require_once 'Product/InfoProduct.php';
// require_once 'Product/Product.php';
// require_once 'Product/Komik.php';
// require_once 'Product/Game.php';
// require_once 'Product/CetakInfoProduct.php';

//bisa panggil auto pake ini atau yang atas
spl_autoload_register(function($class){
    require_once __DIR__ . '/Product/' . $class . '.php';
});

