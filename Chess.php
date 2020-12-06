<?php

class Chess 
{
    function start()
    {
        $start = readline("Please type start : ");
        if($start == "start"){
            for($i = 1; $i < 9; $i++){
                $number[] = readline("Masukkan bidak $i (x,y) :");
            }

            return $number;
        }else{
            echo "Good Bye.\n";
            die();
        }
    }

    function dataPossibility($number)
    {
        $explodeNumber = explode(",",$number);
        $numberX = $explodeNumber[0];
        $numberXMin = $explodeNumber[0] - 1 < 1 ? 1 : ($explodeNumber[0] - 1 > 8 ? 8 : $explodeNumber[0] - 1);
        $numberXMax = $explodeNumber[0] + 1 < 1 ? 1 : ($explodeNumber[0] + 1 > 8 ? 8 : $explodeNumber[0] + 1);

        $numberY = $explodeNumber[1];
        $numberYMin = $explodeNumber[1] - 1 < 1 ? 1 : ($explodeNumber[1] - 1 > 8 ? 8 : $explodeNumber[1] - 1);
        $numberYMax = $explodeNumber[1] + 1 < 1 ? 1 : ($explodeNumber[1] + 1 > 8 ? 8 : $explodeNumber[1] + 1);

        for ($x = $numberXMin; $x <= $numberXMax; $x++) {
            for ($y = $numberYMin; $y <= $numberYMax; $y++) {
                if($number != "$x,$y"){
                    $arrayNumber[] = "$x,$y";
                }
            }
        }

        return $arrayNumber;
    }
}

?>