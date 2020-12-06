<?php

// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php Test.php
// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "Chess.php";

// Class untuk run Testing.
class TestSecond extends TestCase
{
    public function testChess()
    {
        // Kita pakai class yang mau kita test.
        $chess = new Chess();

        // Kita masukan parameter input, yang harusnya dapat output (2,1), (5,3), (1,5), (2,7).
        $number[] = "2,1";
        $number[] = "5,2";
        $number[] = "7,3";
        $number[] = "4,4";
        $number[] = "1,5";
        $number[] = "8,6";
        $number[] = "6,7";
        $number[] = "3,8";

        $result = $chess->process($number);

        $prediction = [];

        $this->assertEquals($prediction, $result); 
    }
}

?>