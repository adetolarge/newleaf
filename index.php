<?php
use APP\Product;
use AyelaORM\Database;
use Latte\Engine;
include __DIR__."/vendor/autoload.php";

$env = \Dotenv\Dotenv::createImmutable(__DIR__);
$env->load();






Database::setup($_ENV["DB_HOST"],$_ENV["DB_NAME"],$_ENV["DB_USERNAME"],$_ENV["DB_PASSWORD"],false);
var_dump($_ENV["DB_HOST"]);


$user = new user();




$latte = new Engine();
$latte->render("homepage.latte",[
    "data" => $_ENV["DB_HOST"]
]);




?>