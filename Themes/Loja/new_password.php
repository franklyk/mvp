<fieldset class="container_document container_new_password border radius bgcolor-white" id="container_new_password">


    <div class="header_document">
        <h1 class="title_cart text-center color-green-dark">Nova senha</h1>
    </div>

    <div class="result"></div>

    <form action="" method="post" class="form_general form_new_password">

        <div class="input_pass_recovery div_input  radius">
            <input type="password" class="input_data user_pass border radius" name="user_pass_recovery"
                id="user_pass_recovery" required>
            <label class="label_input color-white-dark font-medium font-weight-min" for="user_pass">Digite a nova Senha:</label>
            <span class="showHide">
                <i class="fa fa-eye"></i>
            </span>
        </div>

        <div class="input_pass_recovery_conf div_input  radius">
            <input type="password" class="input_data user_pass border radius" name="user_pass" id="user_confirm_pass"
                required>
            <label class="label_input color-white-dark font-medium font-weight-min" for="user_pass"> Redigite a Senha:</label>
            <span class="showHide">
                <i class="fa fa-eye"></i>
            </span>
        </div>

        <div class=" btns input_confirm_recovery">
            <button class="btn_dark btn_cancelar font-medium">
                CANCELAR
            </button>
            <button type="submit" id="confirm_recovery" name="confirm_recovery"
                class="font-medium text-center btn_green confirm_recovery">
                CONFIRMAR
            </button>
        </div>
    </form>
</fieldset>