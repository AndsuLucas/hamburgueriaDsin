<?php
use Classes\Model\Client;
use Classes\Message\Message;

//validar estes dados depois!
$dados_usuario = $_POST;
$client        = new Client();

$result = $client->insert($dados_usuario);

if ($result) {
    Message::setMessage("Cadastro efetuado com sucesso :) !", "sucess");
    header("location: /?page=login_cliente");
}
Message::setMessage("Ocorreu um erro. Tente novamente mais tarde :( ", "danger");
header("location: /?page=login_cliente");



