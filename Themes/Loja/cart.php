<?php
    require "Core/Ctdb.php";
?>

<div class="modal_fade_blur"></div>

<div class="container_cart" id="container_cart">


    <table class="table">
        <caption class="title_cart color-green-dark">
            <h1>Finalizar compra</h1>
            <div class="btn_close_container btn_red radius" id="btn_close_cart">
                <span class="lines line1 bgcolor-white"></span>
                <span class="lines line2 bgcolor-white"></span>
            </div>
        </caption>
        <thead class="thead color-green-dark">
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
        <?php for($i = 0; $i < 20; $i++): ?>

        <tbody class="tbody">
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

        <tfoot class="tfoot">
            <tr>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="text" class="font-medium border radius cupom" placeholder="Cupom de desconto">
                </td>
                <td colspan="2"><input type="text" class="font-medium border radius cupom"
                        placeholder="Cupom de desconto"></td>
                <button class="btn_search radius" name="btn_discount" id="btn_discount">
                    <i class="fa fa-percent"></i> Aplicar Desconto</button>

                <td rowspan="2">
                    <h3>Total</h3>
                </td>
                <td colspan="2" rowspan="2" class="total_valor"><span>R$</span>315,00</td>
                <form method="post" id="choose_shipping">
                    <input type="radio" name="shipping_option" id="shipping_option" value="1"> <span
                        class="font-text-sub">Sedex: </span>
                    <span class="font-text-sub">R$ 30,00 - 7 dias úteis</span><br>

                    <input type="radio" name="shipping_option" id="shipping_option" value="2"> <span
                        class="font-text-sub">Pac: </span>
                    <span class="font-text-sub">R$ 20,00 - 15 dias úteis</span><br>
                    <p class="text-left font-text-sub font-weight-medium title_table">Custo do Frete:</p>
                    <input type="text" id="input_shipping" name="input_shipping" class="radius zipcode">

                    <button class="btn_search radius" name="btn_shipping" id="btn_shipping">
                        <i class="fa fa-truck"></i> Calcular</button>
                    <p class="text-left font-text-sub font-weight-medium title_table">Cupom de Desconto:</p>

                    <form method="post" id="form_discount">
                        <input type="text" id="input_discount" name="input_discount" class="radius">


                    </form>
                </form>
            <tr>
                <td colspan="2" class="td_confirm">
                    <button class="btn_orange border radius">Continuar a Compra</button>
                    <button class="btn_green border radius">COMPRAR</button>
                </td>
                <td>
                </td>
            </tr>
        </tfoot>
    </table>

</div>