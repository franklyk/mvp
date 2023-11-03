<?php 
    require_once '../../Core/conection.php';

    $Post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    $Post_Filters = array_map('strip_tags', $Post);

    $message = null;

    $email = $Post_Filters['user_email'];
    $pass = $Post_Filters['user_pass'];
    
    if(!$email || empty($email)  || $email == null){
        $message = ['status'=> 'error','message'=>'Dados invalidos!','redirect'=>''];
        echo json_encode($message);
        return;
    }else{
        //Consulta a base de dados sobre o EMAIL
        $Read = $pdo-> prepare("SELECT adm_id, adm_firstname, adm_lastname, adm_phone, adm_email, adm_pass, adm_nivel FROM adm WHERE adm_email = :user_email");
        $Read ->bindValue(':user_email', $email);
        $Read->execute();
        
        //Verificar e checar a senha 
        $Lines = $Read-> rowCount();

        if($Lines > 0){
            //Inicia a contagem de tentativa de login
            $_SESSION['blocked'] = 0;

            foreach($Read as $Show){}

            $VerifyPass = password_verify($pass, $Show['adm_pass']);
            if(!$VerifyPass){
                $count = $_SESSION['blocked'] += 1;
                $message = [
                    'status' => 'error', 
                    'message' => 'Email e/ou senha incorretos...', 
                    'redirect' => ''
                ];
                echo json_encode($message);
                return;

            }else{
                //Verifica se está marcado para lembrar a senha, se estiver gera os cookies no sistema.
                if(!empty($Post_Filters['user_remember'])){
                    $time = time() + (3600 * 24 * 30);
                    $logged_email = $Post_Filters['user_email'];
                    $logged_pass = $Post_Filters['user_pass'];
                    setcookie("LOGEMAIL", $logged_email, $time, "/");
                    setcookie("LOGPASS", $logged_pass, $time, "/");
                }

                $_SESSION['adm_id'] = $Show['adm_id'];
                $_SESSION['adm_firstname'] = $Show['adm_firstname'];
                $_SESSION['adm_phone'] = $Show['adm_phone'];
                $_SESSION['adm_email'] = $Show['adm_email'];
                $_SESSION['adm_nivel'] = $Show['adm_nivel'];
                $_SESSION['logged'] = 1;

                $message = [
                    'status' => 'success', 
                    'message' => 'Aguarde...', 
                    'redirect' => 'Controller/Login/Redirect.php'
                ];
                echo json_encode($message);
                return;

            }
        }
        
    }

?>