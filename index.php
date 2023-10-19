<?php 
    require "Core/connection.php";
?>
</head>

<body class="window_general">

    <section class="header">
        <?php require_once "./Themes/Loja/header.php"; ?>
    </section>
    <nav class="sidebar border">

    </nav>
    <main class="main">
        <?php require_once "Core/Router.php"; ?>
    </main>

    <section class="footer border">
        <?php require_once "./Themes/Loja/footer.php"; ?>
    </section>

    <!-- <script src=" assets/Js/Ajax.js"></script> -->
    <!-- <script src=" assets/Js/Autocomplete.js"></script> -->
    <!-- <script src=" assets/Js/jquery-form.js"></script> -->
    <!-- <script src=" assets/Js/jquery-money.js"></script> -->
    <!-- <script src=" assets/Js/jquery-datetimepicker.full.js"></script> -->
    <!-- <script src=" assets/Js/jquery.js"></script>
        <script src=" assets/Js/script.js"></script> -->
    <!-- <script src=" assets/Js/maskinput.js"></script> -->
    <!-- <script src=" assets/Js/themes.js"></script> -->
    <!-- <script src=" assets/Js/Views.js"></script> -->
</body>

</html>
<?php 
ob_end_flush();
?>