<?php 
    @require "Core/conection.php";

    $query = $pdo->query('SELECT adm_firstname, adm_lastname, adm_email, adm_pass FROM adm WHERE  adm_nivel = "'.LEVEL_SUPER.'" ');
    $res_set = $query->fetchAll(PDO::FETCH_ASSOC);
    
    $row_count = count($res_set);
    
    if($row_count == 0){
        
    }

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

    <?php include_once "Themes/Loja/address.php"; ?>
    <?php include_once "Themes/Loja/cart.php"; ?>
    <?php include_once "Themes/Loja/checklist.php"; ?>
    <?php include_once "Themes/Loja/details.php"; ?>
    <?php include_once "Themes/Loja/login.php"; ?>
    <?php include_once "Themes/Loja/new_password.php"; ?>
    <?php include_once "Themes/Loja/payment.php"; ?>
    <?php include_once "Themes/Loja/payments.php"; ?>
    <?php include_once "Themes/Loja/recovery.php"; ?>
    <?php include_once "Themes/Loja/register.php"; ?>
    <?php include_once "Themes/Loja/thanks.php"; ?>



    <main class="main">
        <?php require_once "Core/Router.php"; ?>
    </main>

    <?php include_once "Themes/Loja/footer.php";?>

    <script src="assets/Js/jquery.js"></script>
    <script src="assets/Js/ajax.js"></script>
    <script src="assets/Js/script.js"></script>
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