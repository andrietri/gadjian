<?php
    require_once('Chess.php');

    $chess = new Chess();
    $input = $chess->start();
    $result = $chess->process($input);
?>