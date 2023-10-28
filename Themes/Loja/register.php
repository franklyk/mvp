<fieldset class="container_modal border radius bgcolor-white" id="container_register">

    <div class="header_modal">
        <h1 class="title_cart text-center color-green-dark">Faça seu Cadastro</h1>
        <div class="btn_close_container border bgcolor-red radius" id="btn_close_register">
            <span class="lines line1 bgcolor-white"></span>
            <span class="lines line2 bgcolor-white"></span>
        </div>
    </div>
    <div class="result border radius"></div>

    <form action="" method="post" class="form_general form_register_user">

        <div class="div_input input_firstname radius">
            <input type="text" class="input_data user_firstname border radius" name="user_firstname"
                id="user_firstname">
            <label class="label_input" for="user_firstname">Nome:</label>
        </div>
        <div class="div_input input_lastname  radius">
            <input type="text" class="input_data user_lastname border radius" name="user_lastname" id="user_lastname">
            <label class="label_input" for="user_lastname">Sobrenome</label>
        </div>

        <div class="div_input input_email radius">
            <input type="email" class="input_data user_email border radius" name="user_email" id="user_email">
            <label class="label_input" for="user_email">E-mail: </label>
        </div>

        <div class="div_input input_address radius">
            <input type="text" class="input_data user_address border radius" name="user_address" id="user_address">
            <label class="label_input" for="user_address">END:</label>
        </div>
        <div class="div_input input_cep radius">
            <input type="text" class="input_data user_cep border radius" name="user_cep" id="user_cep">
            <label class="label_input" for="user_cep">CEP:</label>
        </div>

        <div class="div_input input_phone radius">
            <input type="text" class="input_data user_phone border radius" name="user_phone" id="user_phone">
            <label class="label_input" for="user_phone">Telefone:</label>
        </div>
        <div class="div_input input_city radius">
            <input type="text" class="input_data user_city border radius" name="user_city" id="user_city">
            <label class="label_input" for="user_city">Cidade:</label>
        </div>
        <div class="div_input input_uf radius">
            <input type="text" class="input_data user_phone border radius" name="user_uf" id="user_uf">
            <label class="label_input" for="user_uf">UF:</label>
        </div>
        <div class="div_input input_nasc radius">
            <input type="text" class="input_data user_phone border radius" name="user_nasc" id="user_nasc">
            <label class="label_input" for="user_nasc">Nasc:</label>
        </div>
        <div class="div_input input_pass radius">
            <input type="password" class="input_data user_pass border radius" name="user_pass" id="userPass">
            <label class="label_input" for="user_pass">Senha:</label>
        </div>
        <button class="btn_green" id="btn_salvar" name="btn_salvar">Cadastrar</button>
    </form>
</fieldset>