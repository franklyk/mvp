<style>
    .header_bg{
        width: 100%;
        height: auto;
        margin: 0;
        background-color: #f2f2f2;
    }

    .header_bg .header_top{
        width: 80%;
        margin: 0 10%;
        font-size: 0.8em;
        padding: 4px 0;
    }

    .header_bg .header_top a{
        margin: 0 3px;
        padding: 5px 10px;
    }

    .header_bg .header_main{
        width: 80%;
        margin: 0 10%;
        font-size: 0.8em;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #FFFFFF;
    }

    .header_main input[type=search]{
        padding: 10px 20px;
        width: 80%;
        margin: 0;
        float: left;
        background-color: #f2f2f2;
    }

    .header_main button{
        float: right;
        padding: 10px 10px;
        margin: 0;
    }
    .header_bg .header_footer{
        width: 100%;
        margin: 0 0 30px 0;
        font-size: 0.8em;
        background-color: #FFFFFF;
    }

    .header_footer ul{
        width: 80%;
        margin: 0 10%;
        padding: 5px 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .header_footer a{
        padding: 5px 10px;
        color: #666666;
    }

    .header_footer li{
        display: inline-block;
    }

    .header_footer a:hover,
    .header_footer li:hover{
        background-color: #b0acac;
        color: #FFFFFF;
    }

    .header_footer li span{
        font-size: 0.7em;
        background-color: #6f7882;
        color: #FFFFFF;
        border-radius: 50%;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        padding: 2px 2px;
        margin-top: -10px;
        margin-left: 7px;
        position: absolute;
    }

    @media(max-width: 1380px){
        .header_main input[type=search]{
            width: 87%;
        }
    }

    @media(max-width: 1180px){
        .header_main input[type=search]{
            width: 85%;
        }
    }

    @media(max-width: 1000px){
        .header_main input[type=search]{
            width: 82%;
        }

        .header_bg .header_top{
            width: 90%;
            margin: 0 5%;
        }
    }

    @media(max-width: 930px){
        .header_bg .header_main{
            width: 90%;
            margin: 0 5%;
            font-size: 0.7em;
            display: block !important;
        }

        .header_bg .header_footer{
            width: 90%;
            margin: 0 5%;
            font-size: 0.7em;
            display: block !important;
        }

        .header_main input[type=search]{
            width: 80%;
        }

        .header_bg .header_top{
            font-size: 0.7em;
        }
    }

    @media(max-width: 760px){
        .header_bg .header_top{
            font-size: 0.8em;
        }

        .header_bg .header_main{
            font-size: 0.8em;
        }

        .header_main input[type=search]{
            width: 93% !important;
        }

        .header_footer ul{
            width: 90%;
            margin: 0 5%;
            padding: 5px 10px;
            display: block;
        }

        .header_footer a{
            display: block;
            text-align: center;
        }
    }

    @media(max-width: 600px){
        .header_main input[type=search]{
            width: 100% !important;
            margin-bottom:5px;
        }
    }
</style>

<article class="header_bg">
    <div class="header_top">
        <div class="divisor2">
            <p class="text-left m-text-center">
                <i class="fa fa-truck"></i> Entregamos em todo o Brasil
            </p>
        </div>

        <div class="divisor2">
            <p class="text-right m-text-center">
                <a href="<?= strip_tags($facebook) ?>" class="radius btn_off" title="Acesse nossa rede social do Facebook"
                target="_blank">
                    <i class="fab fa-facebook"></i>
                </a>

                <a href="<?= strip_tags($instagram) ?>" class="radius btn_off" title="Acesse nossa rede social do Instagram"
                   target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>

                <a href="<?= strip_tags($twitter) ?>" class="radius btn_off" title="Acesse nossa rede social do Twitter"
                target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>

                <a href="<?= strip_tags($youtube) ?>" class="radius btn_off" title="Acesse nossa rede social do Youtube"
                   target="_blank">
                    <i class="fab fa-youtube"></i>
                </a>

                <a href="<?= strip_tags($whatsapp)?>" class="radius btn_off" title="Acesse nossa rede social do WhatsApp"
                target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>

                <a href="mailto:<?= $mailSite?>" class="radius btn_off" title="Entre em contato conosco via e-mail">
                    <i class="fa fa-envelope"></i>
                </a>

                <a href="<?= $configBase ?>login" class="radius btn_off" title="Faça o login para gerenciar seus pedidos">
                    <i class="fa fa-unlock"></i> Entrar
                </a>
            </p>
        </div>

        <div class="clear"></div>
    </div>

    <div class="header_main">
        <div class="divisor3">
            <a href="<?= $configBase?>" title="Retornar a página inicial">
                <img src="<?= $configBase ?>Images/General/logo.png" alt="Logomarca da <?= $titleSite ?>" title="Logomarca da <?= $titleSite ?>">
            </a>
        </div>

        <div class="divisor3">
            <form method="post" id="frm_search">
                <div class="header_frm_search">
                    <input type="search" name="input_search" id="input_search" placeholder="Ex. Tênis Adidas"  class="radius">
                </div>

                <div class="header_frm_btn">
                    <button name="btn_search" id="btn_search" class="radius btn_edit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>
        </div>

        <div class="divisor3">
            <p class="text-center">
                <i class="fa fa-envelope"></i> <?= $mailSite?>
            </p>
            <p class="text-center">
                <i class="fa fa-phone"></i><?= $phoneSite?>
            </p>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>

    <div class="header_footer">
        <ul class="navigator">
            <a href="<?= $configBase?>categories/offers" title="Conheça nossas promoções" class="radius">
                <li>Promoções</li>
            </a>

            <a href="<?= $configBase?>categories/shoes" title="Conheça nossos famosos calçados" class="radius">
                <li>Calçados</li>
            </a>

            <a href="<?= $configBase?>categories/clotching" title="Conheça nossas roupas" class="radius">
                <li>Roupas</li>
            </a>

            <a href="<?= $configBase?>cart" title="Confira o seu carrinho de compras" class="radius">
                <li>
                    <span>99</span>
                    <i class="fa fa-shopping-cart"></i>
                </li>
            </a>
        </ul>
    </div>
    <div class="clear"></div>

</article>
