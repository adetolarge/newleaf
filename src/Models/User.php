<?php



namespace App\Models;

use AyelaORM\DatabaseObject;
use AyelaORM\SQLType;

Class User extends DatabaseObject{
    public string $db_UserName;
    #[SQLType("Varchar()100")]
    public string $db_Email;
    public string $db_Passwordhash;

    
}






?>