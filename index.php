<?php 
    @require "Core/conection.php";
?>

<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titleSite ?> </title>
    <link rel="stylesheet" href="./assets/Css/Style.css">
</head>

<body class="container">

    <?php include_once "Themes/Loja/header.php";?>


    <main class="main">
        <?php require_once "Core/Router.php"; ?>
    </main>

    <?php include_once "Themes/Loja/footer.php";?>

    <script src="assets/Js/jquery.js"></script>
    <script src="assets/Js/ajax.js"></script>
    <!-- <script src=" assets/Js/Autocomplete.js"></script> -->
    <!-- <script src=" assets/Js/jquery-form.js"></script> -->
    <!-- <script src=" assets/Js/jquery-money.js"></script> -->
    <!-- <script src=" assets/Js/jquery-datetimepicker.full.js"></script> -->
    <!-- <script src=" assets/Js/maskinput.js"></script> -->
    <!-- <script src=" assets/Js/themes.js"></script> -->
    <!-- <script src=" assets/Js/Views.js"></script> -->
</body>
</html>
<?php 
ob_end_flush();
?>