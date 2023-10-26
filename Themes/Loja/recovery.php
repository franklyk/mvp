<div class="container_documents container_recovery border radius" id="container_recovery">

    <h1 class="title_container color-dark text_shadow">Recuperar Senha</h1>

    <p class="msg_recovery font-medium color-dark text_shadow">
        Clique em
        <strong class="color-dark">Enviar</strong>
        para receber um link de recuperação de senha, ou
        <strong class="color-dark">Cadastrar</strong>
        para fazer o seu cadastro...
    </p>

    <div class="buttons">
        <a href="<?= $configBase?>register">
            <button class="recovery_open_register btn_dark" id="recovery_open_register">
                Cadastrar
            </button>
        </a>
        <a href="<?= $configBase?>new_password">
            <button class="send_recovery btn_blue" id="send_recovery">
                Enviar
            </button>
        </a>
    </div>

</div>