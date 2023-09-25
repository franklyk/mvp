<div class="modal_fade_blur"></div>

<fieldset class="modal_form_register container_register radius" id="container_register">

    <div class="header_register header_form">

        <h1 class=" color-green-dark font-text-extra">Faça seu Cadastro</h1>

        <div class="btn_close_register btn_green radius" id="btn_close_register">
            <span class="line1"></span>
            <span class="line2"></span>
        </div>

    </div>

    <form action="" method="post" class="form_general form_register_user">

        <div class="input_firstname div_input radius">
            <input class="radius" type="text" class="user_firstname" name="user_firstname" id="user_firstname" required>
            <label for="user_firstname">Nome:</label>
        </div>
        <div class="input_lastname div_input  radius">
            <input class="radius" type="text" class="user_lastname" name="user_lastname" id="user_lastname" required>
            <label for="user_lastname">Sobrenome</label>
        </div>

        <div class="input_email div_input  radius">
            <input class="radius" type="email" class="user_email" name="user_email" id="user_email" required>
            <label for="user_email">E-mail: </label>
        </div>

        <div class="input_ender div_input  radius">
            <input type="text" class="user_ender radius" name="user_ender" id="user_ender" required>
            <label for="user_ender">END:</label>
        </div>
        <div class="input_cep div_input  radius">
            <input type="text" class="user_cep radius" name="user_cep" id="user_cep" required>
            <label for="user_cep">CEP:</label>
        </div>

        <div class="input_phone div_input  radius">
            <input type="text" class="user_phone radius" name="user_phone" id="user_phone" required>
            <label for="user_phone">Telefone:</label>
        </div>
        <div class="input_city div_input  radius">
            <input type="text" class="user_city radius" name="user_city" id="user_city" required>
            <label for="user_city">Cidade:</label>
        </div>
        <div class="input_uf div_input  radius">
            <input type="text" class="user_phone radius" name="user_phone" id="user_phone" required>
            <label for="user_phone">UF:</label>
        </div>
        <div class="input_nasc div_input ">
            <input type="text" class="user_phone radius" name="user_nasc" id="user_nasc" required>
            <label for="user_nasc">Nasc:</label>
        </div>
        <div class="input_pass div_input  radius">
            <input type="password" class="user_pass radius" name="user_pass" id="user_pass" required>
            <label for="user_pass">Senha:</label>
            <span class="showHide">
                <i class="fa fa-eye"></i>
            </span>
        </div>
        <div class="input_confirm_create  radius ">
            <a href="#" class="radius btn_green font-text-medium ">
                Cadastrar
            </a>
        </div>

        <div class="result_message"></div>

    </form>
</fieldset>