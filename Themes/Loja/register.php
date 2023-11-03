<fieldset class="container_document container_register border radius bgcolor-white">

    <div class="header_document">
        <h1 class="title_cart text-center color-green-dark">Faça seu Cadastro</h1>
    </div>

    <div class="result"></div>

    <form method="post" class="form_general form_register_user">

        <div class="div_input input_firstname radius">
            <input type="text" class="input_data user_firstname border radius" name="user_firstname"
                id="user_firstname" required>
            <label class="label_input color-white-dark font-medium font-weight-min" for="user_firstname">Nome:</label>
        </div>
        <div class="div_input input_lastname  radius">
            <input type="text" class="input_data user_lastname border radius" name="user_lastname" id="user_lastname" required>
            <label class="label_input color-white-dark font-medium font-weight-min" for="user_lastname">Sobrenome</label>
        </div>

        <div class="div_input input_email radius">
            <input type="email" class="input_data user_email border radius" name="user_email" id="user_email" required>
            <label class="label_input color-white-dark font-medium font-weight-min" for="user_email">E-mail: </label>
        </div>

        <div class="div_input input_address radius">
            <input type="text" class="input_data user_address border radius" name="user_address" id="user_address" required>
            <label class="label_input color-white-dark font-medium font-weight-min" for="user_address">END:</label>
        </div>
        <div class="div_input input_cep radius">
            <input type="text" class="input_data user_cep border radius" name="user_cep" id="user_cep" required>
            <label class="label_input color-white-dark font-medium font-weight-min" for="user_cep">CEP:</label>
        </div>

        <div class="div_input input_phone radius">
            <input type="text" class="input_data user_phone border radius" name="user_phone" id="user_phone" required>
            <label class="label_input color-white-dark font-medium font-weight-min" for="user_phone">Telefone:</label>
        </div>
        <div class="div_input input_city radius">
            <input type="text" class="input_data user_city border radius" name="user_city" id="user_city" required>
            <label class="label_input color-white-dark font-medium font-weight-min" for="user_city">Cidade:</label>
        </div>
        <div class="div_input input_uf radius">
            <input type="text" class="input_data user_phone border radius" name="user_uf" id="user_uf" required>
            <label class="label_input color-white-dark font-medium font-weight-min" for="user_uf">UF:</label>
        </div>
        <div class="div_input input_nasc radius">
            <input type="text" class="input_data user_phone border radius" name="user_nasc" id="user_nasc" required>
            <label class="label_input color-white-dark font-medium font-weight-min" for="user_nasc">Nasc:</label>
        </div>
        <div class="div_input input_pass radius">
            <input type="password" class="input_data user_pass border radius" name="user_pass" id="userPass" required>
            <label class="label_input color-white-dark font-medium font-weight-min" for="user_pass">Senha:</label>
        </div>
        <div class="btns">
            <button class="btn_dark">
                CANCELAR
            </button>
            <button class="btn_blue btn_salvar" id="btn_salvar" name="btn_salvar">
                CADASTRAR
            </button>
        </div>
    </form>
</fieldset>