<?php 
    require "Core/Ctdb.php";
?>

<div class="modal_fade_blur"></div>

<fieldset class="modal_form_container radius container_login" id="container_login">

    <div class="header_form">

        <h1 class=" color-green-dark font-text-extra">Login</h1>

        <div class="btn_close_login btn_red radius" id="btn_close_login">
            <span class="line1"></span>
            <span class="line2"></span>
        </div>

    </div>

    <form action="" method="post" class="form_general form_login_user">

        <div class="input_email div_input  radius">
            <input class="radius" type="email" class="user_email" name="user_email" id="user_email" required>
            <label for="user_email">E-mail: </label>
        </div>

        <div class="input_pass div_input  radius">
            <input type="password" class="user_pass radius" name="user_pass" id="user_pass" required>
            <label for="user_pass">Senha:</label>
            <span class="showHide">
                <i class="fa fa-eye"></i>
            </span>
        </div>
        <div class="input_confirm radius ">
            <a href="#" class="radius font-text-medium text-center btn_green">
                Entrar
            </a>
        </div>

        <div class="remember">
            <label for="remeber">Salvar Senha</label>
            <input type="checkbox" id="remeber" name="remeber" value="Remember">
        </div>

        <div class="create" id="btn_open_register">
            <a href="#">Criar Conta</a>
        </div>
        <div class="recovery">
            <a href="#">Esqueceu a senha?</a>
        </div>

        <div class="result_message"></div>

    </form>
</fieldset>