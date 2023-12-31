<?php 
/*
*********************************************
    Parametrização geral de toda a aplicação
*********************************************
    Copyright (c) 2023, Franklin da Silva Batista
                KLYK WEB-SERVICE
*********************************************
*/
//iniciando a Seção em todas a Aplicação
@session_start();


//Configurando o Timezone e a Data Hora do Nosso Servidor
date_default_timezone_set("America/Sao_paulo");

$host = 'localhost';
$user = 'root';
$pass = '';
$dbase = 'mvp';

$utf8 = 'utf8';

$logo = '<img src="../img/K.png" width=100px>';



/*Configuações da Aplicação */
$configBase = "http://localhost/mvp/"; //Url da Aplicação;

$titleSite = "MVP"; //Título de sua Aplicação

$description = "Site desenvolvido no Curso de Montagem de LOJA VIRTUAL!!!"; //Descrição da Aplicação

$mailSite = "contato@klykwebservice.com.br"; //E-mail do Cliente ou Dono da Aplicação

$whatsappSite = "(61) xxxxx-xxxx"; //Whatsapp do Cliente ou Empresa Cliente

$phoneSite = "(61) xxxxx-xxxx"; //Telefone do Cliente ou Empresa Cliente

$statusSite = 1; //0=>offline, 1=>online, 2=>maintenance  [Status da aplicação]

$helloBar = 1;  //0=>offline, 1=>online [Status do HelloBar]

/* Configurações do Autor */
$nameAdm = 'Franklin';//Nome do Técnico
$nicknameAdm = 'da Silva Batista'; //Sobrenome do Técnico
$mailAdm = "contato@kws.com.br"; //E-mail do Autor
$phoneAdm = "6199999999";

$nameAuthorSite = "Klyk WEb Services - Construções de Sites"; //Nome do Autor

$phoneAuthorSite = "(61) xxxxx-xxxx"; //Telefone do Autor


/* Configurações de Servidor de E-mail */
$mailHost = ""; //Definição Configuração de Host do Servidor
$mailSMTP =  ""; //Definição Configuração de SMTP do Servidor
$mailUser = ""; //Definição Configuração de Login de Usuário
$mailPass = ""; //Definição Configuração de Senha de Acesso
$mailResponse = ""; //Definição Configuração de E-mail Para Resposta
$mailPort = 465; //Definição Configuração de Porta do Servidor [587 ou 465]
$mailSecure = "SSL"; //Definição Configuração de Segurança [TLS/SSL]

/* Configurações de Temas */
$themeSite = "Loja/"; //Definição Configuração Tema do Site
$themeAdmin = "Admin/"; //Definição Configuração Tema do Administrativo
$themeClient = "Painel/"; //Definição Configuração Tema do Painel de Controle

/* Configurações de Diretórios de Temas */
$themePathAdmin = "Themes/".$themeAdmin; //Definição Configuração do Diretório do Tema do Painel Administrativo
$themePathClient =  "Themes/".$themeClient; //Definição Configuração do Diretório do Tema do Painel do Cliente ou Usuário
$themePathSite =  "Themes/".$themeSite; //Definição Configuração do Diretório do Tema do Site

/* Configurações Redes Sociais*/
$facebook = 'https://www.facebook.com';

$twitter = 'https://twitter.com';

$instagram = 'https://www.instagram.com';

$youtube = 'https://www.youtube.com';

$whatsapp = 'https://wa.me/55619999999999';

define("DATE", date("Y-m-d H:i:s"));
define("ADM_RASH", password_hash('123456', PASSWORD_DEFAULT));

/* Configurações de Níveis de Acesso */
define("LEVEL_USER", 1); //Nível de Acesso Para Usuários [Operacionais]
define("LEVEL_CLIENT", 2); //Nível de Acesso Para Clientes [Coordenadores de Equipes]
define("LEVEL_ADMIN", 9); //Nível de Acesso Para Administradores [Administrador Responsável pela Aplicação]
define("LEVEL_SUPER", 10); //Nível de Acesso Para Profissional Web [Você]

define('BLOCKED', 1); //Bloqueio o Usuário Após 3 Tentativas de Senha Errado
define('TIMESBLOCKED', 3); //Quantas Tentativas Usuário Pode Fazer Antes de Bloquear
define('REMEMBER', 1); //Lembrar Senha

?>