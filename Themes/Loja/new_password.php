<?php 
    require "Core/Ctdb.php";
?>

<div class="modal_fade_blur" id="modal_fade_blur"></div>

<fieldset class="modal_form_container border radius container_new_password" id="container_new_password">

    <div class="header_form">

        <h1 class="title_form color-green-dark font-extra">Nova Senha</h1>

        <div class="btn_close_container btn_red radius" id="btn_close_new_password">
            <span class="lines line1 bgcolor-white"></span>
            <span class="lines line2 bgcolor-white"></span>
        </div>

    </div>

    <form action="" method="post" class="form_general form_new_password">

        <div class="input_pass_recovery div_input  radius">
            <input type="password" class="input_data user_pass border radius" name="user_pass_recovery" id="user_pass_recovery" required>
            <label class="label_input" for="user_pass">Digite a nova Senha:</label>
            <span class="showHide">
                <i class="fa fa-eye"></i>
            </span>
        </div>

        <div class="input_pass_recovery_conf div_input  radius">
            <input type="password" class="input_data user_pass border radius" name="user_pass" id="user_confirm_pass" required>
            <label class="label_input" for="user_pass"> Redigite a Senha:</label>
            <span class="showHide">
                <i class="fa fa-eye"></i>
            </span>
        </div>

        <div class="input_confirm_recovery radius ">
            <button type="submit" id="confirm_recovery" name="confirm_recovery" class="radius font-medium text-center btn_green confirm_recovery">
                Confirmar
            </button>
        </div>

        <div class="result_message"></div>

    </form>
</fieldset>