

<fieldset class="container_document border radius container_address" id="container_address">

    <div class="header_address header_document">
        <h1 class="color-green-dark font-max">Novo Endereço</h1>
    </div>
    <div class="result"></div>
    <form method="post" class="form_general form_register_address" id="form_register_address">

        <div class="div_input input_ender">
            <input type="text" class="input_data border radius" name="input_ender_user" id="input_ender_user" required>
            <label for="input_ender_user" class="label_input color-white-dark">Endereço</label>
        </div>

        <div class="div_input input_num">
            <input type="text" class="input_data border radius" name="input_num_user" id="input_num_user" required>
            <label for="input_num_user" class="label_input color-white-dark">Número:</label>
        </div>

        <div class="div_input input_cep">
            <input type="text" class="input_data border radius" name="input_cep_user" id="input_cep_user" required>
            <label for="input_cep_user" class="label_input color-white-dark">Cep:</label>
        </div>

        <div class="div_input input_compl">
            <input type="text" class="input_data border radius" name="input_compl_user" id="input_compl_user" required>
            <label for="input_compl_user" class="label_input color-white-dark">Complemento:</label>
        </div>

        <div class="div_input input_bairro">
            <input type="text" class="input_data border radius" name="input_bairro_user" id="input_bairro_user"
                required>
            <label for="input_bairro_user" class="label_input color-white-dark">Bairro:</label>
        </div>

        <div class="div_input input_city">
            <input type="text" class="input_data border radius" name="input_city_user" id="input_city_user" required>
            <label for="input_city_user" class="label_input color-white-dark">Cidade:</label>
        </div>

        <div class="div_input input_uf">
            <input type="text" class="input_data border radius" name="input_uf_user" id="input_uf_user" required>
            <label for="input_uf_user" class="label_input color-white-dark">UF:</label>
        </div>

        <div class="btn_input">
            <button class="btn_dark" id="" name="">
                Cancelar
            </button>
            <button class="btn_blue" id="btn_ender" name="btn_ender">
                Cadastrar
            </button>
        </div>
    </form>
</fieldset>
