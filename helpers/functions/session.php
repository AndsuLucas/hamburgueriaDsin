<?php 
//checka o login
function checkLogin(){
    if (!isset($_SESSION["client"]["login"])) {
        header("location: ?page=login_cliente");
    }else if ($_GET["page"]=== "login_cliente") {
        header("location: /?page=home");
    }
}
//inicia a sessão de forma mais elegante, evitando warnings e repetições desnecessárias
function start_session(){
    if (!session_start()) {
       
        session_start();
    
    }
}