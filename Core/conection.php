<?php 

    require "config.php";

    try {
        $pdo = new PDO("mysql:dbname=$dbase; host=$host; charset=utf8","$user", "$pass");
    } catch (Exception $e) {
        echo 'Falha ao conectar! <br><br>' .$e;
    }

    // $table_adm = "
    // CREATE TABLE IF NOT EXISTS adm (
    //     adm_id int(11) NOT NULL,
    //     adm_firstname varchar(255) NOT NULL,
    //     adm_lastname varchar(255) NOT NULL,
    //     adm_phone varchar(20) NOT NULL,
    //     adm_email varchar(255) NOT NULL,
    //     adm_pass varchar(255) NOT NULL,
    //     adm_nivel int(11) NOT NULL,
    //     adm_date datetime NOT NULL
    //     ) ENGINE=InnoDB DEFAULT CHARSET=utf8;


    // ALTER TABLE adm
    // ADD PRIMARY KEY (adm_id);
    
    // ALTER TABLE adm
    // MODIFY adm_id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;";
    
    // $create_table = $pdo->prepare($table_adm);
    // $create_table->execute();

        

    $query = $pdo->query("  SELECT adm_firstname, adm_lastname, adm_email, adm_pass FROM adm WHERE  adm_nivel = '".LEVEL_SUPER."'");
    $res_set = $query->fetchAll(PDO::FETCH_ASSOC);
    
    $row_count = count($res_set);
    
    if($row_count == 0){
        $pdo->query ("INSERT INTO adm (adm_firstname, adm_lastname, adm_phone, adm_email, adm_pass, adm_nivel,adm_date)
        VALUES('$nameAdm', '$nicknameAdm', '$phoneAdm', '$mailAdm', '".ADM_RASH."', '".LEVEL_SUPER."', '".DATE."')");
    }

?>