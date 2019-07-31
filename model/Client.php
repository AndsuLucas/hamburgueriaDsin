<?php

namespace Classes\Model;
use Classes\Model\Model;

/* classe responsável pelas atribuições no banco de dados
que dizem respeito ao USUÁRIO */
class Client extends Model
{
    protected $table = "usuario";

    public function login($email, $senha)
    {
     
     
     $sql    = "SELECT * FROM usuario WHERE email = ? AND senha = ?";
     $select = $this->database->prepare($sql);
     $select->bindValue(1, $email);
     $select->bindValue(2, $senha);  
     $select->execute();

     $result = $select->fetch();

     return $result;
    

    }

}