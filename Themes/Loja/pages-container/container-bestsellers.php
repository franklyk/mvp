<body>

    <h1 class="font-text-max font-weight-max color-white text-margin title-folder ">Promoções Relampago:</h1>

    <div class="container_exposed radius">

        <?php for($i=0; $i < 6; $i++): ?>

            <div class="exposed bgcolor-white-light border radius">

            <img class="product_img" src="<?php $configBase ?>Images/Products/product.png"
                title="Imagem do produto: Tênis Adidas Sporting" alt="Imagem do produto: Tênis Adidas Sporting">

            <h3 class="product_title color-blue-dark text_shadow font-medium text-right">
                Tênis Adidas Sporting
            </h3>

            <span class="discount_off color-red text_shadow font-weight-max text-right">
                30% OFF
            </span>

            <p class="prices">
                <span class="old_price color-red text_shadow font-text-sub"><s> R$ 450,00</s></span>

                <span class="new_price font-weight-max font-text-extra color-green-dark text_shadow"> R$ 315,00</span>
            </p>

            <p class="btn_actions border radius">
                <a href="#" class="color-white radius">
                    <img src="images/imagens.png" alt="">
                </a>
                <a class="color-white radius" href="#">
                    <img src="images/cart.png" alt="">
                </a>
            </p>
        </div>
        <?php endfor; ?>

    </div>
</body>

</html>