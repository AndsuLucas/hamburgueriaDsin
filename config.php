<?php
/*CONFIGURAÇÕES RELACIONADAS AO BANCO DE DADOS, PADRÕES DE ROTAS E ETC */

//DEFINIÇÃO DO BANCO
define("DATABASE", [
    "host"     => "",
    "port"     => "",
    "dbname"   => "",
    "user"     => "",
    "password" => ""
]);


//DEFINIÇÃO DE ROTAS PARA AS PAGINAS (USUÁRIOS COMUNS)
   
define("PATHS",[
    //NOME DA ROTA => //CAMINHO DO ARQUÍVO
    "home"             => "./public/view/home.php",
    "login_cliente"    => "./public/view/login.php",
    "cadastro_cliente" => "./public/view/register.php",
    "dados_cliente"    => "./public/view/profile.php"    
    
]);

//DEFINIÇÃO DAS ROTAS PARA CONTROLLERS

define("CONTROL_PATHS",[
    "user_login"    => "./user/login.php",
    "user_logout"   => "./user/logout.php",
    "user_register" => "./user/register.php",
    "user_update"   => "./user/update.php"
]);