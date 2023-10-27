<?php 
    require_once '../../Core/conection.php';

    $Post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    $Post_Filter = array_map('strip_tags', $Post);

    var_dump($Post_Filter);

?>