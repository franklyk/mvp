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

</body>
<script src="assets/Js/jquery.js"></script>
<script src="assets/Js/ajax.js"></script>
</html>
<?php 
ob_end_flush();
?>