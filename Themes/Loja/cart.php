<?php
    require "Core/Ctdb.php";
?>

<div class="modal_fade_blur"></div>

<div class="container_cart">

    <table class="table">

        <?php for($i = 0; $i < 6; $i++): ?>

        <tr>
            <td class="td_img">
                <img src="Images/Products/product.png" class="img_cart">
            </td>

            <td class="td_title">
                <h2>Tênis Adidas Sport</h2>
                <p>Cor: Azul - Tamanho 32</p>
            </td>
            <td class="td_quantity">
                <form method="post" id="form_cart">
                    <input type="number" id="input_cart" name="input_cart" value="1" class="border radius" />
                </form>
            </td>

            <td class="td_price">
                <p>R$ 320,00</p>
            </td>

            <td class="td_actions">
                <p class="cart_actions">
                    <a href="#" class="radius" id="delete_cart" data-id="<?= $i ?>">
                    </a>
                </p>
            </td>
        </tr>
        <?php endfor; ?>

        <tr>
            <td colspan="2">
                <p class="text-left font-text-sub font-weight-medium">Cupom de Desconto:</p>

                <form method="post" id="form_discount">
                    <input type="text" id="input_discount" name="input_discount" class="radius">

                    <button class="btn_search radius" name="btn_discount" id="btn_discount">
                        <i class="fa fa-percent"></i> Aplicar Desconto</button>
                </form>
            </td>

            <td colspan="3">
                <p class="text-left font-text-sub font-weight-medium">Consulta do Custo do Frete:</p>
                <form method="post" id="form_shipping">
                    <input type="text" id="input_shipping" name="input_shipping" class="radius zipcode">

                    <button class="btn_search radius" name="btn_shipping" id="btn_shipping">
                        <i class="fa fa-truck"></i> Calcular</button>
                </form>
            </td>
        </tr>

        <tr>
            <td colspan="5">
                <p class="text-right font-text-medium font-weight-medium">Valor Total: R$ 1.280,00</p>
            </td>
        </tr>

    </table>

</div>