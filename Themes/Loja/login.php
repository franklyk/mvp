<div class="modal_fade"></div>
<fieldset class="container_modal container_login border radius bgcolor-white" id="container_login">

    <div class="header_modal">
        <h1 class="title_cart text-center color-green-dark">Login</h1>
        <div class="btn_close_container border bgcolor-red radius" id="btn_close_login">
            <span class="lines line1 bgcolor-white"></span>
            <span class="lines line2 bgcolor-white"></span>
        </div>
    </div>
    <div class="result border radius"></div>

    <form action="controller/Login/Login.php" method="post" class="form_general form_login_user">

        <div class="input_email div_input  radius">
            <input class="input_data border radius" type="email" class="user_email" name="user_email" id="user_email"
                required>
            <label class="label_input" for="user_email">E-mail: </label>
        </div>

        <div class="input_pass div_input  radius">
            <input type="password" class="input_data user_pass border radius" name="user_pass" id="user_pass" required>
            <label class="label_input" for="user_pass">Senha:</label>
            <span class="showHide">
                <i class="fa fa-eye"></i>
            </span>
        </div>

        <div class="remember">
            <input type="checkbox" id="remember" name="remember" value="remember">
            <label class="label_checkbox" for="remember">Salvar Senha</label>
        </div>

        <div class="recovery" id="btn_open_recovery">
            Esqueceu a senha?
        </div>
        <div class="create" id="btn_open_register">
            Criar Conta
        </div>

        <div class="input_confirm radius ">
            <button id="btn_confirm_login" name="btn_confirm_login"
                class="radius font-medium text-center btn_green btn_confirm_login">
                Entrar
            </button>
        </div>
    </form>
</fieldset>