<div class="container_top">
    <div class="container_top_info">
        <ul>
            <li>
                <p class="text-center font-tex-max">
                    <i class="fa fa-truck"></i>
                </p>

                <p class="text-center font-text-sub font-weight-medium"> Frete Gratuito</p>

                <p class="text-center font-text-sub">Compras a partir de R$ 200,00</p>
            </li>

            <li>
                <p class="text-center font-tex-max">
                    <i class="fa fa-credit-card"></i>
                </p>

                <p class="text-center font-text-sub font-weight-medium"> Pagamento no Cartão</p>

                <p class="text-center font-text-sub">Pague no cartão de crédito até 12x</p>
            </li>

            <li>
                <p class="text-center font-tex-max">
                    <i class="fa fa-gift"></i>
                </p>

                <p class="text-center font-text-sub font-weight-medium"> Ganhe descontos nas suas próximas compras</p>
            </li>

            <li>
                <p class="text-center font-tex-max">
                    <i class="fa fa-phone"></i>
                </p>

                <p class="text-center font-text-sub font-weight-medium">
                    <span class="none"></span> Central de Atendimento
                </p>

                <p class="text-center font-text-sub">Todos os dias - 24h por dia</p>
            </li>

        </ul>
        <div class="clear"></div>
    </div>

    <h1 class="font-text-medium font-weight-medium text-left m-text-center">Mais Vendidos da Semana:</h1>

    <div class="container_top_info">
        <ul class="caroussel">
            <?php for($i = 0; $i < 2; $i++): ?>
                <li class="img-caroussel">
                    <div class="divisor2">
                        <p class="text-left font-weight-medium price_discount radius">10% OFF</p>

                        <img src="<?= $configBase?>Images/Products/product.png" title="Imagem do produto: Tênis Adidas Sporting"
                             alt="Imagem do produto: Tênis Adidas Sporting">
                    </div>

                    <div class="divisor2">
                        <h2 class="text-left m-text-center font-weight-medium font-text-min">Tênis Adidas Sporting</h2>

                        <p class="text-left m-text-center font-weight-min">
                            <span class="price_old radius font-text-sub"><s>R$ 450,00</s></span>

                            <span class="price_off radius font-text-min font-weight-medium"><s>R$ 320,00</s></span>
                        </p>

                        <p class="text-left m-text-center font-text-sub">Lorem Ipsum is simply dummy text of the printing
                        and typesetting. Lorem Ipsum has been the industry's</p>
                        <p class="text-center font-weight-min font-text-sub actions">
                            <a href="<?= $configBase ?>details/<?= $i ?>" title="Visualize os detalhes deste produto"
                            class="btn_edit radius">
                                <i class="fa fa-images"></i>
                            </a>

                            <a href="#" title="Acrescentar este produto ao seu pedido." class="btn_new radius open_buy" data-id="<?= $i ?>">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </p>
                    </div>
                </li>
            <?php endfor; ?>

            <div class="clear"></div>
        </ul>
        <div class="clear"></div>
    </div>
</div>