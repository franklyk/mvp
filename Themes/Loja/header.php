<header class="header header_container border">
        <a class="logo" href="<?= $configBase?>home">
            <img src="Images/k.png">
        </a>
        <form class="form_search radius font-max">
            <button type="button" class="btn_form_search btn_blue border">OK</button>
            <input type="text" class="input_form_search border" name="input_form_search" id="input_form_search">
        </form>

        <nav class="menu_container border">
            <ul>
                <li id="btn_open_cart"><img src="Images/cart.png"></li>
                <li id="btn_open_login"><img src="Images/user.png"></li>
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

    </header>