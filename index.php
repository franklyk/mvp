<?php 
    require "Core/connection.php";
?>

<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titleSite ?> </title>
    <link rel="stylesheet" href="./assets/Css/Style.css">
</head>

<body class="window_general">
    <header class="header header_container">
        <a class="logo" href="#">
            <img src="Images/k.png">
        </a>
        <form class="form_search radius font-max">
            <button type="button" class="btn_form_search btn_blue border">OK</button>
            <input type="text" class="input_form_search border" name="input_form_search" id="input_form_search">
        </form>

        <nav class="menu_container">
            <ul>
                <li id="btn_open_cart"><a href="<?= $configBase?>cart"><img src="Images/cart.png"></a></li>
                <li id="btn_open_login"><a href="<?= $configBase ?>login"><img src="Images/user.png"></a></li>
                <li id="btn_socials_open"><img src="Images/internet.png" alt=""></li>
                <li id="btn_socials_close"><img src="Images/internet.png" alt=""></li>
            </ul>
        </nav>

        <div class="socials_container" id="socials_container">
            <ul class="menu_list">
                <li><a href="<?= $configBase?>login"><img src="Images/login.png" alt=""></a></li>
                <li><a href="#"><img src="Images/whatsapp.png" alt=""></a></li>
                <li><a href="#"><img src="Images/msg.png" alt=""></a></li>
                <li><a href="#"><img src="Images/gmail.png" alt=""></a></li>
            </ul>
        </div>
        <script src="assets/Js/script.js"></script>

    </header>
    <nav class="sidebar border">

    </nav>
    <main class="main">
        <?php require_once "Core/Router.php"; ?>
    </main>

    <footer class="footer_bg ">
        <div class="footer_main">
            <ul>
                <li><a href="#" class="color-white font-extra font-weight-medium text_shadow rules">Categorias</a></li>
                <li><a href="#" class="color-white font-extra font-weight-medium text_shadow rules">Promoções</a></li>
                <li><a href="#" class="color-white font-extra font-weight-medium text_shadow rules">Calçados</a></li>
                <li><a href="#" class="color-white font-extra font-weight-medium text_shadow rules">Roupas</a></li>
                <li>
                    <a href="#" class="security">
                        <img src="images/user.png" alt="">
                        <p class="color-white font-extra font-weight-medium text_shadow">Cadastre-se</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="security">
                        <img src="images/login.png" alt="">
                        <p class="color-white font-extra font-weight-medium text_shadow">Entrar</p>
                    </a>
                </li>
            </ul>

            <ul>
                <li><a href="#" class="color-white font-extra font-weight-medium text_shadow rules">Sobre Nós</a></li>
                <li><a href="#" class="color-white font-extra font-weight-medium text_shadow rules">Política de
                        Privacidade</a></li>
                <li><a href="#" class="color-white font-extra font-weight-medium text_shadow rules">Troca e
                        Devolução</a></li>
                <li><a href="#" class="color-white font-extra font-weight-medium text_shadow rules">Formas de Envio</a>
                </li>
                <li><a href="#" class="color-white font-extra font-weight-medium text_shadow rules">Formas de
                        Pagamento</a></li>
            </ul>

            <ul>

                <p class="color-white font-extra font-weight-medium text_shadow">CANAIS DE CONTATO:</p>
                <div class="footer_contact">
                    <div>
                        <a href=""><img src="images/msg.png" alt=""></a>
                        <p class="color-white font-extra font-weight-medium text_shadow"><?= $mailSite; ?></p>
                    </div>
                    <div>
                        <a href=""><img src="images/whatsapp.png" alt=""></a>
                        <p class="color-white font-extra font-weight-medium text_shadow"><?= $whatsappSite ?></p>
                    </div>
                    <div>
                        <a href=""><img src="images/telefone.png" alt=""></a>
                        <p class="color-white font-extra font-weight-medium text_shadow"><?= $phoneSite ?></p>
                    </div>
                </div>
                <p class="color-white font-extra font-weight-medium text_shadow">
                    NOSSAS REDES SOCIAIS:
                </p>
                <div class="footer_socials">
                    <a href="#"><img src="images/facebook.png" alt=""></a>
                    <a href="#"><img src="images/instagram.png" alt=""></a>
                </div>

            </ul>
        </div>
        <div class="footer_down">
            <h1 class="text-center"><?= $titleSite ?> -&copy; <?= date('Y') ?> Todos os direitos Reservados </h1>
            <p class="text-center"> Desenvolvido por KLYK WEB SERVICE</p>
        </div>
    </footer>

    <!-- <script src=" assets/Js/Ajax.js"></script> -->
    <!-- <script src=" assets/Js/Autocomplete.js"></script> -->
    <!-- <script src=" assets/Js/jquery-form.js"></script> -->
    <!-- <script src=" assets/Js/jquery-money.js"></script> -->
    <!-- <script src=" assets/Js/jquery-datetimepicker.full.js"></script> -->
    <!-- <script src=" assets/Js/jquery.js"></script>
        <script src=" assets/Js/script.js"></script> -->
    <!-- <script src=" assets/Js/maskinput.js"></script> -->
    <!-- <script src=" assets/Js/themes.js"></script> -->
    <!-- <script src=" assets/Js/Views.js"></script> -->
</body>

</html>
<?php 
ob_end_flush();
?>