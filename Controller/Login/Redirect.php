<?php 
    require_once "../../Core/conection.php";

    if(isset($_SESSION['adm_id'], $_SESSION['adm_firstname'], $_SESSION['adm_email'], $_SESSION['adm_nivel'], $_SESSION['logged']) && $_SESSION['adm_nivel'] == 10){
        header('location:Thems/Admin/index.php');
    }

?>