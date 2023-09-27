<?php 
    require "Core/Ctdb.php";
?>

<div class="modal_fade_blur" id="modal_fade_blur"></div>

<fieldset class="modal_form_container border radius container_login" id="container_login">

    <div class="header_form">

        <h1 class="title_form color-green-dark font-text-extra">Login</h1>

        <div class="btn_close_container btn_red radius" id="btn_close_login">
            <span class="lines line1 bgcolor-white"></span>
            <span class="lines line2 bgcolor-white"></span>
        </div>

    </div>

    <form action="" method="post" class="form_general form_login_user">

        <div class="input_email div_input  radius">
            <input class="input_data border radius" type="email" class="user_email" name="user_email" id="user_email" required>
            <label class="label_input" for="user_email">E-mail: </label>
        </div>

        <div class="input_pass div_input  radius">
            <input type="password" class="input_data user_pass border radius" name="user_pass" id="user_pass" required>
            <label class="label_input" for="user_pass">Senha:</label>
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
            <input type="checkbox" id="remember" name="remember" value="remember">
            <label class="label_checkbox" for="remember">Salvar Senha</label>
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