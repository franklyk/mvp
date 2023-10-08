<?php
require 'Core/Ctdb.php';
?>

<div class="container_checklist" id="container_checklist">
    <table class="table">
        <caption class="title_cart color-green-dark">
            <h1>Confira seu Pedido</h1>
            <div class="btn_close_container btn_red radius" id="btn_close_checklist">
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
                <td>
                    <h3>Total</h3>
                </td>
                <td class="total_valor"><span>R$</span>315,00</td>
            </tr>
            <tr>
                <td>
                    Frete:
                </td>
                <td>
                    R$ 20,00
                </td>
            </tr>

        </tfoot>
    </table>
    <h2>Onde você deseja receber seu pedido?</h2>
    <?php for($i = 0; $i < 5; $i++): ?>
    <div class="divisor4 card4 bgcolor-white-light radius">
        <p class="text-center font-weight-medium color-dark font-text-sub">Rua Luz das Flores, 230, Apto. 22.222</p>
        <p class="text-center font-weight-medium color-dark font-text-sub">B. Jardim Da Luz - Cidade/UF</p>
        <p class="text-center font-weight-medium color-dark font-text-sub">CEP: 12345-678</p>

        <p class="text-center font-weight-medium color-dark font-text-sub actions">
            <a href="#" class="radius btn_edit" data-id="<?= $i ?>" title="Enviar para este endereço">
                <i class="fa fa-truck"></i> Enviar para este endereço
            </a>
        </p>
    </div>
    <?php endfor; ?>
    <form action="">
        <button class="btn_orange border radius">Voltar ao Carrinho</button>
        <button class="btn_green border radius">COMPRAR</button>
    </form>
</div>