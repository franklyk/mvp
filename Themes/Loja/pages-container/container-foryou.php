<?php 
    require "Core/Ctdb.php";
?>

<body>

    <h1 class="font-text-max font-weight-max color-blue-dark text-margin title-folder ">Separamos para Você:</h1>

    <div class="container_top radius">

        <?php for($i=0; $i < 6; $i++): ?>

        <div class="exposed bgcolor-white-light">

            <img class="product_img" src="<?php $configBase ?>Images/Products/product.png"
                title="Imagem do produto: Tênis Adidas Sporting" alt="Imagem do produto: Tênis Adidas Sporting">

            <h2 class="product_title color-green font-text-extra text-right">
                Tênis Adidas Sporting
            </h2>

            <span class="discount_off color-red font-weight-max text-right">
                30% OFF
            </span>

            <p class="prices">
                <span class="old_price color-red font-text-sub"><s> R$ 450,00</s></span>

                <span class="new_price font-weight-max font-text-extra color-green-dark"> R$ 315,00</span>
            </p>

            <p class="btn_actions">
                <a href="#" title="Visualize os detalhes deste produto."
                    class="btn_datails bgcolor-blue color-white radius font-text-extra">
                    <img src="images/imagens.png" alt="">
                </a>
                <a class="btn_cart bgcolor-green color-white radius font-text-extra" href="#"
                    title="Adicione este produto ao carrinho.">
                    <img src="images/cart.png" alt="">
                </a>
            </p>
        </div>
        <?php endfor; ?>

    </div>
</body>

</html>