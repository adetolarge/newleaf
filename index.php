<?php
use APP\Product;
use Latte\Engine;
include __DIR__."/vendor/autoload.php";


$latte = new Engine();
$latte->render("homepage.latte",[
    "data" => "Hello from PHP",
    "tola" => "Hi I am Adelaja Adetola"
]);




?>