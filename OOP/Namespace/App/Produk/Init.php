<?php

// require_once 'InfoProduk.php';
// require_once 'Produk.php';
// require_once 'Komik.php';
// require_once 'Game.php';
// require_once 'CetakInfoProduk.php';
// require_once 'User.php';

// require_once "Service/User.php";

spl_autoload_register(function ($class) {
    //App\Produk\User = ["App", "Produk", "User"]
    $class = explode('\\', $class);
    $class = end($class);
    require_once  'Produk/' . $class . '.php';
});


spl_autoload_register(function ($class) {
    $class = explode('\\', $class);
    $class = end($class);
    require_once  'Service/' . $class . '.php';
});
