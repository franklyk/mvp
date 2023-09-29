<?php
    require "Core/Ctdb.php";
?>

<body>
    <footer class="footer_bg">
        <div class="footer_main">
            <ul>
                <li><a href="#">Categorias</a></li>
                <li><a href="#">Promoções</a></li>
                <li><a href="#">Calçados</a></li>
                <li><a href="#">Roupas</a></li>
                <li>
                    <a href="#">
                        <img src="images/user.png" alt="">
                        Cadastre-se
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="images/login.png" alt="">
                        Entrar
                    </a>
                </li>
            </ul>

            <ul>
               <li><a href="#">Sobre Nós</a></li>
                <li><a href="#">Política de Privacidade</a></li>
                <li><a href="#">Troca e Devolução</a></li>
                <li><a href="#">Formas de Envio</a></li>
                <li><a href="#">Formas de Pagamento</a></li>
            </ul>

            <ul></ul>

            <div>
                <p class="text-center color_dark font-text-min">
                    NOSSAS REDES SOCIAIS:
                </p>
                <ul>

                </ul>
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <p class="font-text-min color_dark text-center">CANAIS DE CONTATO:</p>
                <i class="fa fa-envelope"></i>
                <li>
                    <?= $mailSite; ?>
                </li>
                <i class="fab fa-whatsapp"></i>
                <li>
                    <?= $whatsappSite ?>
                </li>
                <li>
                    <i class="fa fa-phone"></i>
                    <?= $phoneSite ?>
                </li>
                <p>
                    <a href="mailto:<?= $mailSite ?>" title="Entre em contato via e-mail" class="radius footer_contact">
                    </a>
                </p>
                <p>
                    <a href="mailto:<?= $whatsappSite ?>" title="Entre em contato via whatsapp"
                        class="radius footer_contact">
                    </a>
                </p>
                <p>
                    <a href="mailto:<?= $phoneSite ?>" title="Entre em contato via telefone"
                        class="radius footer_contact">
                    </a>
                </p>
            </div>

        </div>
        <div class="footer_down">
            <h1 class="text-center"><?= $titleSite ?> -&copy; <?= date('Y') ?> Todos os direitos Reservados </h1>
            <p class="text-center"> Desenvolvido por Klykweb/SITES</p>
        </div>
    </footer>
</body>

</html>