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
}

?>