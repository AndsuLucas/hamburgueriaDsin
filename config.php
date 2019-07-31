<?php
/*CONFIGURAÇÕES RELACIONADAS AO BANCO DE DADOS, PADRÕES DE ROTAS E ETC */

//DEFINIÇÃO DO BANCO
define("DATABASE", [
    "host"     => "ec2-23-21-160-38.compute-1.amazonaws.com",
    "port"     => "5432",
    "dbname"   => "dfvtbbf7gg6ir2",
    "user"     => "ptlaqpzriberga",
    "password" => "e7272cf5dd417570d297a30110b26964b631b9d8194e2d5b69953d8c693c5dd9"
]);


//DEFINIÇÃO DE ROTAS PARA AS PAGINAS (USUÁRIOS COMUNS)

//?page=nome
define("PATHS",[
    //NOME DA ROTA => //CAMINHO DO ARQUÍVO
    "home"             => "./public/view/home.php",
    "login_cliente"    => "./public/view/login.php",
    "cadastro_cliente" => "./public/view/register.php",
    "dados_cliente"    => "./public/view/profile.php",
    "meus_pedidos"     => "./public/view/list_user_order.php",
    "fazer_pedido"     => "./public/view/order_register.php"    
    
]);

//DEFINIÇÃO DAS ROTAS PARA CONTROLLERS
//?control_page=nome
define("CONTROL_PATHS",[
    "user_login"    => "./user/login.php",
    "user_logout"   => "./user/logout.php",
    "user_register" => "./user/register.php",
    "user_update"   => "./user/update.php",
    "product_api"   => "./user/product_api.php"
]);