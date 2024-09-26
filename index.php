<?php
use APP\Product;
use AyelaORM\Database;
use Latte\Engine;
use APP\Models\User;
include __DIR__."/vendor/autoload.php";
require_once __DIR__.'/router.php';

$env = \Dotenv\Dotenv::createImmutable(__DIR__);
$env->load();

Database::setup($_ENV["DB_HOST"],$_ENV["DB_NAME"],$_ENV["DB_USERNAME"],$_ENV["DB_PASSWORD"],false);
var_dump($_ENV["DB_HOST"]);
$user = new user();

$latte = new engine;

$latte = new Engine();
$latte->render("homepage.latte",[
    "data" => $_ENV["DB_HOST"]
]);




?>


