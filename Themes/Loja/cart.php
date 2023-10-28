<div class="modal_fade" id="modal_fade"></div>
<div class="container_modal border bgcolor-white" id="container_cart">

    <div class="header_modal">
        <h1 class="title_cart text-center color-green-dark">Finalizar compra</h1>
        <div class="btn_close_container border bgcolor-red radius" id="btn_close_cart">
            <span class="lines line1 bgcolor-white"></span>
            <span class="lines line2 bgcolor-white"></span>
        </div>
    </div>
    <div class="result border"></div>
    <table class="container_cart">

        <thead class="thead font-sub color-green-dark">
            <tr>
                <th scope="colgroup" colspan="2">
                    <h3>Produtos</h3>
                </th>
                <th scope="col">
                    <h3>Quant</h3>
                </th>
                <th scope="col">
                    <h3>Valor</h3>
                </th>
                <th scope="col">
                    <h3>Del</h3>
                </th>
            </tr>
        </thead>
        <?php for($i = 0; $i < 2; $i++): ?>

        <tbody class="tbody font-sub">
            <tr>
                <td rowspan="3" class="td_img">
                    <img src="images/products/product.png">
                </td>
                <td class="td_product">
                    <h4>Tênis Adidas Sporting</h4>
                </td>
                <td rowspan="3" class="td_quantity">
                    <input type="number" value="1">
                </td>
                <td rowspan="3" class="td_value">
                    <span>R$</span>315,00
                </td>
                <td rowspan="3" class="td_delete">
                    <div class="btn_delete btn_red radius">
                        <span class="lines line1 bgcolor-white"></span>
                        <span class="lines line2 bgcolor-white"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="td_color">
                    <p>Cor: <span>azul</span></p>
                </td>
            </tr>
            <td class="td_size">
                <p>Tamanho: <span>40</span></p>
            </td>
        </tbody>
        <?php endfor; ?>
    </table>
    <div class="finality">
        <fieldset class="container_frete">
            <h3 class="color-green-dark font-min">Calcular Frete</h3>
            <form method="post" class="choose_shipping" id="choose_shipping">
                <div>
                    <input type="radio" name="shipping_option" id="shipping_option_pac" value="1" checked>
                    <label for="shipping_option" class="font-medium font-weight-medium">Pac</label>
                </div>
                <div>
                    <input type="radio" name="shipping_option" id="shipping_option_sedex" value="2">
                    <label for="shipping_option" class="font-medium font-weight-medium">Sedex</label>
                </div>
            </form>
        </fieldset>
        <div class="cupom_discount">
            <label for="cupom" class="font-min font-weight-medium">Cupom de Desconto</label>
            <input type="text" class="cupom font-min border" name="cupom" id="cupom">
        </div>
        <div class="frete_value">
            <h3 class="font-min">Frete R$</h3>
            <span class="frete_total font-medium font-weight-max">30,00</span>
        </div>
        <div class="total_value">
            <h3 class="total_total font-min">Total R$:</h3>
            <span class="value_total font-medium font-weight-max">315,00</span>
        </div>
        <div class="btns">
            <!-- <button class="btn_blue">Calcular</button> -->
            <a href="<?= $configBase ?>home"><button class="btn_orange border font-weight-max">Continuar a
                    Compra</button></a>
            <a href="<?= $configBase ?>checklist"><button class="btn_blue border font-weight-max">Finalizar</button></a>
        </div>
    </div>

</div>