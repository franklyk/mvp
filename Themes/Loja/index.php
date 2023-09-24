<?php
    include_once 'modal.php';
    require_once 'header.php';
?>

<main class="container">
    <section class="container_main">
        <div class="container_controller">
            <?php require 'pages-container/container-top.php'; ?>
            <?php require 'pages-container/container-bestsellers.php'; ?>
            <?php require 'pages-container/container-banner-small.php'; ?>
            <?php require 'pages-container/container-foryou.php'; ?>
            <?php require 'pages-container/container-thebest.php'; ?>
        </div>
    </section>
</main>

<?php require_once 'footer.php'; ?>
