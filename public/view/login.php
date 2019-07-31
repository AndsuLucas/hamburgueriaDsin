<?php use Classes\Message\Message;?>
<br>
<div id="message">
    <?= Message::getMessage() ?>
</div>
<fieldset class="container">
    <h3 class="text-center">Entrar na Área do Cliente</h3>
    <form action="./controllers/?control_page=user_login" method="POST">
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control">
            </div>
            <input type="submit" value="entrar" class="btn btn-primary">
    </form>
</fieldset>
    
