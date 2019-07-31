<?php
namespace Classes\Message;

abstract class Message{
    public static function setMessage($message,$type) 
    {

        

        if($type == "danger") {
            $_SESSION["msg"] =  "<p class='alert alert-danger text-center'>".$message."</p>";
            

        }else {

            $_SESSION["msg"] =  "<p class='alert alert-success text-center'>".$message."</p>";
            
                
            
        }



    }

    public static function getMessage() 
    {
        
        $message = $_SESSION["msg"];
        unset($_SESSION["msg"]);
        return $message;
    }

}