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

    function process($input){
        $temporary = "";
        $temporaryInput = "";

        for($k = 0; $k < count($input); $k++){
            if($input[$k] !== $temporary){
                $dataPossibility = $this->dataPossibility($input[$k]);

                for($l = 0; $l < count($dataPossibility); $l++){
                    for($h = 0; $h < count($input); $h++){
                        if($dataPossibility[$l] == $input[$h]){
                            if($input[$k]!=$temporaryInput){
                                $data[] = $input[$k];
                            }

                            $temporary = $dataPossibility[$l];
                            $temporaryInput = $input[$k];
                        }
                    }
                }
            }
        }

        if(!empty($data)){
            $data = $data;
            
            return $data;
        }else{
            $data = [];

            return $data;
        }
    }

    function result($result)
    {
        echo "(";
        echo implode("), (",$result);
        echo ")";
    }
}

?>