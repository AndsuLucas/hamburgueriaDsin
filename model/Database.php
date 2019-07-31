<?php
namespace Classes\Model;
use PDO;
abstract class Database
{
    public static function connect()
    {   
        $host     = DATABASE["host"];
        $port     = DATABASE["port"]; 
        $dbname   = DATABASE["dbname"];
        $user     = DATABASE["user"];
        $password = DATABASE["password"];
       
        $db       = new PDO("pgsql:host=$host;port=$port;dbname=$dbname",$user,$password);
        
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }
}
