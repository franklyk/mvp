
<div class="container_checklist" id="container_checklist">
    <table class="table">
        <caption class="title_checklist color-green-dark">
            <h1>Confira seu Pedido</h1>
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
                    <h4>Tênis Adidas Sporting</h4>
                </td>
                <td rowspan="3" class="td_quantity">
                    1
                </td>
                <td rowspan="3" class="td_value">
                    315,00
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

    <div class="details_checklist">
        <div class="frete_checklist">
            <h3>Frete R$:</h3>
            <span>35,00</span>
        </div>
        <div class="desconto_cheklist">
            <h3>Desconto R$:</h3>
            <span>0,00</span>
        </div>
        <div class="total_checklist">
            <h3>Total R$:</h3>
            <span>315,00</span>
        </div>
    </div>

    <div class="container_address_checklist">
        <h2 class="color-green-dark ">Endereço de entrega</h2>
        <?php for($i = 0; $i < 1; $i++): ?>
        <div class="address_checklist">
            <p class="font-weight-medium color-dark font-sub">Rua Luz das Flores, 230, Apto. 22.222</p>
            <p class="font-weight-medium color-dark font-sub">B. Jardim Da Luz - Cidade/UF</p>
            <p class="font-weight-medium color-dark font-sub">CEP: 12345-678</p>
            <p class="font-weight-medium color-dark font-sub actions">
                <a href="#" data-id="<?= $i ?>">
                    Atualizar Endereço
                </a>
            </p>
        </div>
        <?php endfor; ?>
    </div>
    <form action="" class="btns_checklist">
        <button class="btn_orange border btn_voltar">VOLTAR AO CARRINHO</button>
        <button class="btn_blue border btn_confirmar">CONFIRMAR</button>
    </form>
</div>

