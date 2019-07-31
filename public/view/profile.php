<?php use Classes\Message\Message; ?>
<br>
<div id="message">
    <?= Message::getMessage() ?>
</div>
<fieldset>
    <h3>Seus dados</h3>
    <form action="./controllers/?control_page=user_update" method="POST">
        <input type="hidden" name="id_usuario" value=<?= isset($_SESSION) ?  $_SESSION["client"]["user_data"]["id_usuario"] : " " ?> >
        <div class="form-row">    
             <div class="form-group col-md-6">
                <label for="">Nome Completo</label>
                <input type="text" class="form-control" id="nome_completo" name="nome_completo" value=<?= isset($_SESSION) ?  $_SESSION["client"]["user_data"]["nome_completo"] : " " ?>>
            </div>
            <div class="form-group col-md-6">
                <label for="">Email</label>
                <input type="text" class="form-control" id="email" name="email" value=<?= isset($_SESSION) ?  $_SESSION["client"]["user_data"]["email"] : " " ?>> 
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value=<?= isset($_SESSION) ?  $_SESSION["client"]["user_data"]["telefone"] : " " ?>>
            </div>
            <div class="form-group col-md-4">
                <label for="">Celular</label>
                <input type="text" class="form-control" id="celular" name="celular" value=<?= isset($_SESSION) ?  $_SESSION["client"]["user_data"]["celular"] : " " ?>>
            </div>
            <div class="form-group col-md-4">
                <label for="">Cpf</label>
                <input type="text" class="form-control" id="cpf" name="cpf" value=<?= isset($_SESSION) ?  $_SESSION["client"]["user_data"]["cpf"] : " " ?>>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="">Rua</label>
                <input type="text" class="form-control" id="rua" name="rua" value=<?= isset($_SESSION) ?  $_SESSION["client"]["user_data"]["rua"] : " " ?>>
            </div>
            <div class="form-group col-md-4">
                <label for="">Número</label>
                <input type="text" class="form-control" id="numero" name="numero" value=<?= isset($_SESSION) ?  $_SESSION["client"]["user_data"]["numero"] : " " ?>>
            </div>
            <div class="form-group col-md-4">
                <label for="">Complemento</label>
                <input type="text" class="form-control" name="complemento" id="complemento" value=<?= isset($_SESSION) ?  $_SESSION["client"]["user_data"]["complemento"] : " " ?>>
            </div>
        </div>
        
        <input type="submit" class="btn btn-primary" value="Atualizar dados">
    </form>
</fieldset>