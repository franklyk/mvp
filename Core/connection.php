<?php 
    require "config.php";
    
    //Criação da base de dados
    $pdo = new PDO('mysql: host= '."$host" , $user, $pass);
    $create_db = 'CREATE DATABASE IF NOT EXISTS mvp';
    $create = $pdo->prepare($create_db);
    $create -> execute();

    //Criação da Connexão Com a base de dados
    $conexao = '<php
    $pdo = new PDO("mysql:host='.$host.'; dbname='.$mydb.'", "'.$user.'", "'.$pass.'")
    $pdo->exec("SET NAMES '.$utf8.' "); 
    ';




?>