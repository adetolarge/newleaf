<?php



namespace App\Models;

use AyelaORM\DatabaseObject;

use AyelaORM\SQLType;
Class Animal extends DatabaseObject{
    public string $db_Name;
    #[SQLType("Varchar()100")]
    public string $db_Breed;
    #[SQLType("Varchar(100)")]
    public string $db_Color;
    #[SQLType("Varchar(20)")]
    public string $db_price;
    #[SQLType("Decimal(200)")]
    public string $db_gender;
    #[SQLType("Int(3)")]
    public string $db_AGE;

    
}






?>