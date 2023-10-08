<?php 
    require "Core/Ctdb.php";
?>

<div class="modal_fade_blur"></div>

<fieldset class="modal_form_container border radius container_address" id="container_address">

    <div class="header_address header_form">

        <h1 class="title_form color-green-dark font-extra">Faça seu Cadastro</h1>

        <div class="btn_close_container border btn_red radius" id="btn_close_address">
            <span class="lines line1 bgcolor-white-dark"></span>
            <span class="lines line2 bgcolor-white-dark"></span>
        </div>

    </div>
    <form method="post" class="form_general form_register_address" id="form_register_address">

        <div class="div_input input_cep">
            <input type="text" class="input_data border radius" name="input_cep_user" id="input_cep_user" required>
            <label for="input_cep_user" class="label_input">Cep:</label>
        </div>
        <div class="div_input input_ender">
            <input type="text" class="input_data border radius" name="input_ender_user" id="input_ender_user" required>
            <label for="input_ender_user" class="label_input">Endereço:</label>
        </div>

        <div class="div_input input_num">
            <input type="text" class="input_data border radius" name="input_num_user" id="input_num_user" required>
            <label for="input_num_user" class="label_input">Número:</label>
        </div>

        <div class="div_input input_compl">
            <input type="text" class="input_data border radius" name="input_compl_user" id="input_compl_user" required>
            <label for="input_compl_user" class="label_input">Complemento:</label>
        </div>

        <div class="div_input input_bairro">
            <input type="text" class="input_data border radius" name="input_bairro_user" id="input_bairro_user"
                required>
            <label for="input_bairro_user" class="label_input">Bairro:</label>
        </div>

        <div class="div_input input_city">
            <input type="text" class="input_data border radius" name="input_city_user" id="input_city_user" required>
            <label for="input_city_user" class="label_input">Cidade:</label>
        </div>

        <div class="div_input input_uf">
            <input type="text" class="input_data border radius" name="input_uf_user" id="input_uf_user" required>
            <label for="input_uf_user" class="label_input radius">UF:</label>
        </div>

        <div class="btn_input">
            <button class="btn_blue" id="btn_ender" name="btn_ender">
                Cadastrar
            </button>
        </div>
    </form>
    <div class="result_message border radius"></div>
</fieldset>