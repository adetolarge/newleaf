<?php

namespace App;

class Product{
    public string $description;
    public string $Title;



    public function List(){
        echo $this->Title;
    }
}

include __DIR__."/vendor/autoload.php";




?>