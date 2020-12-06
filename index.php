<?php
    require_once('Chess.php');

    $chess = new Chess();
    $input = $chess->start();
    $result = $chess->process($input);

    echo "hasil\n";
    if(!empty($result)){
        $chess->result($result);
    }else{
        echo "tidak ditemukan\n";
    }
?>