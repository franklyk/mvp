<?php

    require_once "config.php";
    try {
        $pdo = new PDO("mysql:dbname=$dbase; host=$host; charset=utf8","$user", "$pass");
    } catch (Exception $e) {
        echo 'Falha ao conectar! <br><br>' .$e;
    }


    $query = $pdo->query('SELECT user_nivel FROM controle WHERE user_nivel = "'.LEVEL_SUPER.'"');
    $row = $query->fetchAll(PDO::FETCH_ASSOC);

    $row_count = @count($row);
    // var_dump($row_count);

    if($row_count == 0){
        $pdo->query("INSERT INTO controle SET user_name ='$nameAdm', user_email = '$mailSite', user_pass = '123', user_nivel = '".LEVEL_SUPER."' "); 
    }

?>
    