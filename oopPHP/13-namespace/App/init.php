<?php 

// require_once 'Product/InfoProduct.php';
// require_once 'Product/Product.php';
// require_once 'Product/Komik.php';
// require_once 'Product/Game.php';
// require_once 'Product/PrintInfoProduct.php';
// require_once 'Product/User.php';
// require_once 'Service/User.php';

// bisa panggil auto pake ini atau yang atas
spl_autoload_register(function($class){
    // App\Product\User = ["App", "Product", "User"]
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Product/' . $class . '.php';
});

spl_autoload_register(function($class){
    // App\Service\User = ["App", "Service", "User"]
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Service/' . $class . '.php';
});
