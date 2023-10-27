<?php
$url = explode("/", strip_tags(filter_input(INPUT_GET, "url", FILTER_DEFAULT)));
$url[0] = (!empty($url[0]) ? $url[0] : "home");


//Área do site
if (file_exists("{$themePathSite}{$url[0]}.php") && !is_dir("{$themePathSite}{$url[0]}.php")){
    require "{$themePathSite}{$url[0]}.php";
    
} elseif (!empty($url[1]) && file_exists("{$themePathSite}.{$url[0]}/{$url[1]}.php") && !is_dir("{$themePathSite}.{$url[0]}/{$url[1]}.php")){
    //theme folder
    require "{$themePathSite}.{$url[0]}/{$url[1]}.php";

}elseif(!empty($url[2]) && file_exists("{$themePathSite}.{$url[0]}/{$url[1]}/{$url[2]}.php") && !is_dir("{$themePathSite}.{$url[0]}/{$url[1]}/{$url[2]}.php")){
    //theme folder
    require "{$themePathSite}.{$url[0]}/{$url[1]}/{$url[2]}.php";
}else{
    //theme 404
    if(file_exists("{$themePathSite}/404.php") && !is_dir("{$themePathSite}/404.php")){
        require "404.php";
        //echo "<div class='container'><div class='trigger trigger-error icon-error radius'>Desculpe, mas a página não existe!</div></div>";
    } else{
        require "404.php";
        //echo "<div class='container'><div class='trigger trigger-error icon-error radius'>Desculpe, mas a página não existe!</div></div>";
    }
}

?>