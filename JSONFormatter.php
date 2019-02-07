<?php 

    $data = object();

    if (!empty($_GET['data'])){
        $data = json_decode($_GET['data']);
    }

    echo $data;
?>