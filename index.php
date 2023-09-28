<?php 
    require_once "Core/Ctdb.php";
?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $description ?>"/>
    <meta name="base" content="<?= $configBase ?>">
    <meta itemprop="image" content=""/>
    
    <title><?= $titleSite ?></title>
</head>
<body>
    <?php require_once "Core/Router.php"; ?>

    <!-- <script src=" assets/Js/Ajax.js"></script> -->
    <!-- <script src=" assets/Js/Autocomplete.js"></script> -->
    <!-- <script src=" assets/Js/jquery-form.js"></script> -->
    <!-- <script src=" assets/Js/jquery-money.js"></script> -->
    <!-- <script src=" assets/Js/jquery-datetimepicker.full.js"></script> -->
    <script src=" assets/Js/jquery.js"></script>
    <script src=" assets/Js/script.js"></script>
    <!-- <script src=" assets/Js/maskinput.js"></script> -->
    <!-- <script src=" assets/Js/themes.js"></script> -->
    <!-- <script src=" assets/Js/Views.js"></script> -->
</body>
</html>
<?php 
ob_end_flush();
?>