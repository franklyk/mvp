<div class="container_document container_checklist border radius" id="container_checklist">

    <div class="title_checklist color-green-dark text-center text_shadow font-weight-max">
        <h1>Confira seu Pedido</h1>
    </div>

    <div class="result"></div>

    <table class="checklist_table">

        <thead class="thead color-green-dark">
            <tr>
                <th scope="colgroup" colspan="2">
                    <h3>PRODUTOS</h3>
                </th>
                <th>
                    <h3>COR</h3>
                </th>
                <th scope="col">
                    <h3>TAM</h3>
                </th>
                <th scope="col">
                    <h3>QUANT</h3>
                </th>
                <th scope="col">
                    <h3>R$</h3>
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
                    <h4 class="color-white-dark font-weight-max">Tênis Adidas Sporting</h4>
                </td>
                <td class="td_color">
                    <p class="color-white-dark font-weight-max">azul</p>
                </td>
                <td class="td_size">
                    <p class="color-white-dark font-weight-max">40</p>
                </td>
                <td rowspan="3" class="td_quantity color-white-dark font-weight-max">
                    1
                </td>
                <td rowspan="3" class="td_value color-white-dark font-weight-max">
                    315,00
                </td>
            </tr>
            <tr>

            </tr>

        </tbody>
        <?php endfor; ?>

    </table>

    <div class="footer_checklist">
        <div class="container_address_checklist">
            <h2 class="color-green-dark ">Endereço de entrega</h2>
            <?php for($i = 0; $i < 1; $i++): ?>
            <div class="address_checklist">
                <p class="font-weight-medium color-dark font-min">Rua Luz das Flores, 230, Apto. 22.222</p>
                <p class="font-weight-medium color-dark font-min">B. Jardim Da Luz - Cidade/UF</p>
                <p class="font-weight-medium color-dark font-min">CEP: 12345-678</p>
                <p class="font-weight-medium color-dark font-min actions">
                    <a  href="<?= $configBase ?>address" data-id="<?= $i ?>">
                        Atualizar Endereço
                    </a>
                </p>
            </div>
            <?php endfor; ?>
        </div>
        <div class="closer_checklist">
            <div class="frete_checklist">
                <h3 class="color-white-dark font-weight-max">Frete R$:</h3>
                <span class="color-white-dark font-weight-max">35,00</span>
            </div>
            <div class="desconto_cheklist">
                <h3 class="color-white-dark font-weight-max">Desconto R$:</h3>
                <span class="color-white-dark font-weight-max">0,00</span>
            </div>
            <div class="total_checklist">
                <h3 class="color-white-dark font-weight-max">Total R$:</h3>
                <span class="color-white-dark font-weight-max">315,00</span>
            </div>
        </div>
    </div>


    <div class="btns_checklist">
        <a href="<?= $configBase ?>cart"><button class="btn_orange border font-min font-weight-max text_shadow  btn_voltar">VOLTAR AO CARRINHO</button></a>
        <a href="<?= $configBase ?>payment"><button class="btn_blue border font-min font-weight-max text_shadow btn_confirmar">CONFIRMAR</button></a>
    </div>
</div>