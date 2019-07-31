<?php
use Classes\Model\Client;
use Classes\Message\Message;
$client    = new Client(); 
$user_id   = $_POST["id_usuario"];
$user_info = $_POST;
unset($user_info["id_usuario"]);

$result = $client->update("id_usuario", $user_id, $user_info);

if ($result) {
    Message::setMessage("Dados atualizados com sucesso ! :). Saia e entre denovo para ver os efeitos.", "success");
    header("location: /?page=dados_cliente");
}
