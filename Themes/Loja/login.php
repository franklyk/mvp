<?php 
    require_once "./Core/conection.php";
?>

<fieldset class="container_document container_login bgcolor-white-light border radius" id="container_login">

    <div class="header_document">
        <h1 class="title_cart text-center color-green-dark">Login</h1>
    </div>


    <div class="result radius"></div>


    <form method="post" class="form_general form_login" id="form_login">

        <div class="input_email div_input radius">
            <label class="label_input font-medium font-weight-min color-white-dark" for="user_email">E-mail:
            </label><br>
            <input class="input_data border radius" type="email" class="user_email" name="user_email" id="user_email">

        </div>

        <div class="input_pass div_input radius">
            <label class="label_input font-medium font-weight-min color-white-dark" for="user_pass">Senha:</label><br>
            <input type="password" class="input_data user_pass font-medium border radius" name="user_pass"
                id="user_pass">


            <span class="showHide">
                <i class="fa fa-eye"></i>
            </span>
        </div>

        <div class="div_remember">
            <input type="checkbox" id="user_remember" name="user_remember" value="remember">

            <label class="label_checkbox color-red" for="remember">Salvar Senha</label>
        </div>

        <a class="recovery color-blue" id="btn_open_recovery" href="">
            Esqueceu a senha?
        </a>
        <a class="create color-blue" id="btn_open_register" href="">
            Criar Conta
        </a>

        <div class="btns">
            <button class="btn_dark font-medium text-center btn_cancelar" id="" name="">
                Cancelar
            </button>
            <button id="btn_login" name="btn_login" class="font-medium text-center btn_blue btn_login">
                Entrar
            </button>
        </div>
    </form>
</fieldset>