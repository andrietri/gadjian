<?php
    require_once('Chess.php');

    $chess = new Chess();
    $input = $chess->start();
    $result = $chess->process($input);

    echo "hasil\n";
    if(!empty($result)){
        $a->result($result);
    }else{
        echo "tidak ditemukan\n";
    }
?>