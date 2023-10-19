

<fieldset class="container_documents border radius container_register" id="container_register">

    <div class="header_register header_form">
        <h1 class="title_form color-green-dark font-text-extra">Faça seu Cadastro</h1>
    </div>

    <form action="" method="post" class="form_general form_register_user">

        <div class="input_firstname div_input radius" >
            <input type="text" class="user_firstname input_data border radius" name="user_firstname" id="user_firstname" required>
            <label class="label_input" for="user_firstname">Nome:</label>
        </div>
        <div class="input_lastname div_input  radius">
            <input type="text" class="user_lastname input_data border radius" name="user_lastname" id="user_lastname" required>
            <label class="label_input" for="user_lastname">Sobrenome</label>
        </div>

        <div class="input_email div_input radius">
            <input type="email" class="user_email input_data border radius" name="user_email" id="userEmail" required>
            <label class="label_input" for="user_email">E-mail: </label>
        </div>

        <div class="input_ender div_input radius">
            <input type="text" class="user_ender input_data border radius" name="user_ender" id="user_ender" required>
            <label class="label_input" for="user_ender">END:</label>
        </div>
        <div class="input_cep div_input radius">
            <input type="text" class="user_cep input_data border radius" name="user_cep" id="user_cep" required>
            <label class="label_input" for="user_cep">CEP:</label>
        </div>

        <div class="input_phone div_input radius">
            <input type="text" class="user_phone input_data border radius" name="user_phone" id="user_phone" required>
            <label class="label_input" for="user_phone">Telefone:</label>
        </div>
        <div class="input_city div_input radius">
            <input type="text" class="user_city input_data border radius" name="user_city" id="user_city" required>
            <label class="label_input" for="user_city">Cidade:</label>
        </div>
        <div class="input_uf div_input radius">
            <input type="text" class="user_phone input_data border radius" name="user_phone" id="user_uf" required>
            <label class="label_input" for="user_phone">UF:</label>
        </div>
        <div class="input_nasc div_input radius">
            <input type="text" class="user_phone input_data border radius" name="user_nasc" id="user_nasc" required>
            <label class="label_input" for="user_nasc">Nasc:</label>
        </div>
        <div class="input_pass div_input  radius">
            <input type="password" class="user_pass input_data border radius" name="user_pass" id="userPass" required>
            <label class="label_input" for="user_pass">Senha:</label>

        </div>
        <div class="input_confirm_create radius">
            <a href="#" class="radius btn_green font-text-medium ">
                Cadastrar
            </a>
        </div>
    </form>
        <div class="result_message border radius"></div>

</fieldset>
