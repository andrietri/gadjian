<?php

// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php Test.php
// Butuh Framework PHPUnit
use PHPUnit\Framework\TestCase;

// Class yang mau di TEST.
require_once "Chess.php";

// Class untuk run Testing.
class Test extends TestCase
{
    public function testChess()
    {
        // Kita pakai class yang mau kita test.
        $chess = new Chess();

        // Kita masukan parameter input, yang harusnya dapat output (2,1), (5,3), (1,5), (2,7).
        $number[] = "2,1";
        $number[] = "3,2";
        $number[] = "5,3";
        $number[] = "4,4";
        $number[] = "1,5";
        $number[] = "1,6";
        $number[] = "2,7";
        $number[] = "2,8";

        $result = $chess->process($number);

        $prediction = ["2,1", "5,3", "1,5", "2,7"];

        $this->assertEquals($prediction, $result); 
    }
}

?>