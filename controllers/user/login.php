<?php 
use Classes\Model\Client;
use Classes\Message\Message;

$client = new Client();
//cada valor de cada chave equivale ao tipo de limpeza que ela sofrerá 
//email => e = sanitize_email (!os dados vem de POST)
$login_data = sanitize([
    "email" => "e",
]);
$user_data = $client->login($login_data["email"], addHash($login_data["senha"]));

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