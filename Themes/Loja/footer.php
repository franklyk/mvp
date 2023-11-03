
<footer class="footer bgcolor-black">
    <div class="footer_main bgcolor-white-light radius">
        <ul>
            <li><a href="" class="color-white-dark font-sub font-weight-min text_shadow rules">Categorias</a></li>
            <li><a href="" class="color-white-dark font-sub font-weight-min text_shadow rules">Promoções</a></li>
            <li><a href="" class="color-white-dark font-sub font-weight-min text_shadow rules">Calçados</a></li>
            <li><a href="" class="color-white-dark font-sub font-weight-min text_shadow rules">Roupas</a></li>
            <li>
                <a href="<?= $configBase?>register" class="security">
                    <img src="images/user.png" alt="">
                    <p class="color-white-dark font-sub font-weight-min text_shadow">Cadastre-se</p>
                </a>
            </li>
            <li>
                <a href="<?= $configBase?>login" class="security">
                    <img src="images/login.png" alt="">
                    <p class="color-white font-sub font-weight-min text_shadow"><a href="">Entrar</a></p>
                </a>
            </li>
        </ul>

        <ul>
            <li><a href="" class="color-white-dark font-sub font-weight-min text_shadow rules">Sobre Nós</a></li>
            <li><a href="" class="color-white-dark font-sub font-weight-min text_shadow rules">Política de
                    Privacidade</a></li>
            <li><a href="" class="color-white-dark font-sub font-weight-min text_shadow rules">Troca e
                    Devolução</a></li>
            <li><a href="" class="color-white-dark font-sub font-weight-min text_shadow rules">Formas de Envio</a>
            </li>
            <li><a href="" class="color-white-dark font-sub font-weight-min text_shadow rules">Formas de
                    Pagamento</a></li>
        </ul>

        <ul>

            <p class="color-white-dark font-sub font-weight-min text_shadow">CANAIS DE CONTATO:</p>
            <div class="footer_contact">
                <div>
                    <a href=""><img src="images/msg.png" alt=""></a>
                    <p class="color-white-dark font-sub font-weight-min text_shadow"><?= $mailSite; ?></p>
                </div>
                <div>
                    <a href=""><img src="images/whatsapp.png" alt=""></a>
                    <p class="color-white-dark font-sub font-weight-min text_shadow"><?= $whatsappSite ?></p>
                </div>
                <div>
                    <a href=""><img src="images/telefone.png" alt=""></a>
                    <p class="color-white-dark font-sub font-weight-min text_shadow"><?= $phoneSite ?></p>
                </div>
            </div>
            <p class="color-white-dark font-sub font-weight-min text_shadow">
                NOSSAS REDES SOCIAIS:
            </p>
            <div class="footer_socials">
                <a href=""><img src="images/facebook.png" alt=""></a>
                <a href=""><img src="images/instagram.png" alt=""></a>
            </div>

        </ul>
    </div>
    <div class="footer_down bgcolor-white-light radius">
        <h1 class="color-white-dark font-extra text-center text_shadow font-weight-max"><?= $titleSite ?> -&copy; <?= date('Y') ?> Todos os direitos Reservados </h1>
        <p class="color-white-dark font-medium text-center text_shadow font-weight-max"> Desenvolvido por KLYK WEB SERVICE</p>
    </div>
</footer>