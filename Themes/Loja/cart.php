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
        <?php for($i = 0; $i < 2; $i++): ?>

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
                <td colspan="2"><input type="text" class="font-medium border radius cupom" placeholder="Cupom de desconto"></td>
                
                <td rowspan="2">
                    <h3>Total</h3>
                </td>
                <td colspan="2" rowspan="2" class="total_valor"><span>R$</span>315,00</td>
            </tr>
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