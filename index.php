<?php
require_once "vendor/autoload.php";
use Classes\Model\Model;
use Classes\Message\Message;



start_session();


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <script type="text/javascript" src="https://unpkg.com/feather-icons"></script>
    <script type="text/javascript" src="./public/js/jquery.js"></script>
    <script type="text/javascript" src="./public/js/sanitize.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="?page=home">Valbernielson's Hamburgueria</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php if (!$_SESSION["client"]["login"]){ ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Clientes
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="?page=login_cliente">Entrar</a>
                            <a class="dropdown-item" href="?page=cadastro_cliente">Cadastrar-se</a>
                            
                        </div>
                    </li>
                <?php }else{ ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?=  $_SESSION["client"]["user_data"]["nome_completo"] ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="?page=dados_cliente" target="_blank">Meus dados</a>
                            <a class="dropdown-item" href="?page=" target="_blank">Meus pedidos</a>
                            <a class="dropdown-item" href="?page=fazer_pedido" target="_blank">Fazer pedido</a>
                            
                        </div>
                    </li>
                <?php } ?>   

                
                

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Funcionários
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="">Área administrativa</a>
                    </div>
                </li>
            </ul>
            <?php if ($_SESSION["client"]["login"]){ ?>
                     
                        <a href="./controllers/?control_page=user_logout" class="btn btn-outline-danger my-2 my-sm-0"  name="sair" value="Sair">Sair</a>
                
            <?php } ?>
        </div>
    </nav>
   
    <main class="container">
        <?php 
            //renderização do conteúdo principal da página
          
            require render($_GET["page"], PATHS);
        
        ?>
    </main>
</body>
    
    <script type="text/javascript" src="./public/js/bootstrap.min.js"></script>
    <script>
      feather.replace()
    </script>
</html>