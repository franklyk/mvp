<div class="divisor1">
    <img src="<?= $configBase?>Images/Banners/banner-medium.png" title="<?= $titleSite?>: Banner de Promoções da Loja."
         alt="<?= $titleSite?>: Banner de Promoções da Loja.">
</div>

<div class="clear"></div>

<div class="container_banner">
    <?php for($i = 1; $i < 3; $i++): ?>
        <div class="div_banner">
            <img src="<?= $configBase?>Images/Banners/banner-small<?= $i ?>.png" title="<?= $titleSite?>: Banner de Promoções da Loja."
                 alt="<?= $titleSite?>: Banner de Promoções da Loja." class="img-small-banner">
        </div>
    <?php endfor; ?>
</div>

<div class="clear"></div>