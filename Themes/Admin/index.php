<?php 
    require_once "../../Core/config.php";
?>

<header class="header_container">
    <a class="logo" href="#">
        <img src="../../images/k.png">
    </a>
    <form class="form_search radius font-max">
        <button type="button" class="btn_form_search btn_blue border">OK</button>
        <input type="text" class="input_form_search border" name="input_form_search" id="input_form_search">
    </form>

    <nav class="menu_container">
        <ul>
            <li id="btn_open_cart"><img src="../../images/cart.png" alt=""></li>
            <li id="btn_open_login"><img src="../../images/user.png" alt=""></li>
            <li id="btn_socials_open"><img src="../../images/internet.png" alt=""></li>
            <li id="btn_socials_close"><img src="../../images/internet.png" alt=""></li>
        </ul>
    </nav>

    <div class="socials_container" id="socials_container">
        <ul class="menu_list">
            <li><a href="#"><img src="../../images/login.png" alt=""></a></li>
            <li><a href="#"><img src="../../images/whatsapp.png" alt=""></a></li>
            <li><a href="#"><img src="../../images/msg.png" alt=""></a></li>
            <li><a href="#"><img src="../../images/gmail.png" alt=""></a></li>
        </ul>
    </div>

</header>



<main class="container_admin border radius">

    <button type="button" id="btn_estoque" class="controls estoque bgcolor-orange border radius box_shadow">
        <h3 class="color-white font-medium font-weight-min">Estoque</h3>
        <p class="color-white font-medium font-weight-min">Cadastrar produtos</p>
    </button>

    <button type="button" id="btn_vendas" class="controls vendas bgcolor-red border radius box_shadow">
        <h3 class="color-white font-medium font-weight-min">Vendas</h3>
        <p class="color-white font-medium font-weight-min">Faturamento</p>
    </button>

    <button type="button" id="btn_contas" class="controls contas bgcolor-blue border radius box_shadow">
        <h3 class="color-white font-medium font-weight-min">Contas </h3>
        <p class="color-white font-medium font-weight-min">A pagar e A receber</p>
    </button>

    <button type="button" id="btn_movimentacao" class="controls movimentacao bgcolor-green border radius box_shadow">
        <h3 class="color-white font-medium font-weight-min">Movimentação</h3>
        <p class="color-white font-medium font-weight-min">Diaria e Mensal</p>
    </button>
    <button type="button" id="btn_estrategias" class="controls estratégias bgcolor-yellow-dark border radius box_shadow">
        <h3 class="color-white font-medium font-weight-min">Estratégias</h3>
        <p class="color-white font-medium font-weight-min">Planos futuros</p>
    </button>

    <button type="button" id="btn_outros" class="controls outros bgcolor-gray border radius box_shadow">
        <h3 class="color-white font-medium font-weight-min">Outros</h3>
        <p class="color-white font-medium font-weight-min">Variaveis</p>
    </button>

</main>
<footer class="footer_adm bgcolor-white-dark border">
    <div class="footer_down">
        <h1 class="color-white font-medium font-weight-min"><?= $titleSite ?> -&copy; <?= date('Y') ?> Todos os direitos
            Reservados </h1>
        <p class="color-white font-medium font-weight-min"> Desenvolvido por KLYK WEB SERVICE</p>
    </div>
</footer>