<?php use Classes\Message\Message;?>
<br>
<div id="message">
    <?= Message::getMessage() ?>
</div>
<fieldset>
    <h3>Cadastre-se!</h3>
    <form action="./controllers/?control_page=user_register" method="POST">
        <div class="form-row">    
             <div class="form-group col-md-6">
                <label for="">Nome Completo</label>
                <input type="text" class="form-control" id="nome_completo" name="nome_completo">
            </div>
            <div class="form-group col-md-6">
                <label for="">Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone">
            </div>
            <div class="form-group col-md-4">
                <label for="">Celular</label>
                <input type="text" class="form-control" id="celular" name="celular">
            </div>
            <div class="form-group col-md-4">
                <label for="">Cpf</label>
                <input type="text" class="form-control" id="cpf" name="cpf">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="">Rua</label>
                <input type="text" class="form-control" id="rua" name="rua">
            </div>
            <div class="form-group col-md-4">
                <label for="">Número</label>
                <input type="text" class="form-control" id="numero" name="numero">
            </div>
            <div class="form-group col-md-4">
                <label for="">Complemento</label>
                <input type="text" class="form-control" name="complemento" id="complemento">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha">
            </div>
            <!--<div class="form-group col-md-6">
                <label for="">Repetir Senha</label>
                <input type="password" class="form-control" id="repetir_senha" name="repetir_senha">
            </div>-->
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar!">
    </form>
</fieldset>