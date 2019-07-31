<?php
use Classes\Model\Client;
use Classes\Message\Message;
//limpando possíveis dados sujos
$user_data = sanitize([
    "nome_completo" => "s",
    "email"         => "e",
    "telefone"      => "i",
    "celular"       => "i",
    "cpf"           => "i",
    "rua"           => "s",
    "numero"        => "i",
    "complemento"   => "s"
]);

$client    = new Client();

//caso algum campo esteja vazio
if (isEmpty($user_data)){
    Message::setMessage("Nenhum campo pode ficar e branco!", "danger");
    header("location: /?page=cadastro_cliente");
}
//caso senha e repetir senha seja diferente
if ($user_data["senha"] !== $user_data["repetir_senha"]) {
    Message::setMessage("Senhas não coincidem", "danger");
    header("location: /?page=cadastro_cliente");
}
/* passou nos testes, pode salvar no banco com o hash */
unset($user_data["repetir_senha"]);
                      //hasheia a senha
$user_data["senha"] = addHash($user_data["senha"]);
$result = $client->insert($user_data);

if (!$result) {
    
    Message::setMessage("Ocorreu um erro. Tente novamente mais tarde :( ", "danger");
    header("location: /?page=cadastro_cliente");

}

Message::setMessage("Cadastro efetuado com sucesso :) !", "sucess");
header("location: /?page=login_cliente");


