<?php 
use Classes\Model\Client;
use Classes\Message\Message;

$client = new Client();

$user_data = $client->login($_POST["email"], $_POST["senha"]);

if (($user_data)) {

    /* caso o login retorne algum registro, criamos duas variáveis
    uma para verificar se o usuário está logado e outra para armazenar 
    os dados do mesmo */

    $_SESSION["client"]["login"]      = true;
    $_SESSION["client"]["user_data"]  = $user_data; 
    
    Message::setMessage("Seja bem vindo ".$user_data["nome_completo"], "success");   
    
    header("location: /?page=home");
}else{

    Message::setMessage("Login ou senha inválidos", "danger");   
    header("location: /?page=login_cliente");
}