

<fieldset class="container_documents border container_new_password" id="container_new_password">

    <div class="header_form">
        <h1 class="title_form color-green-dark font-extra">Nova Senha</h1>
    </div>

    <div class="result_message border"></div>

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
    </form>
</fieldset>

