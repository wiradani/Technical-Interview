<?php
require "problem.php";

 class Problem3 extends Problem {

    public function sumOfPowerDigit($n,$x) {
        
        $sum = 0;

        $count = (int)pow($n, $x);

        while ($count != 0) { 
        $d = $count % 10; 
        $sum += $d; 
        $count /= 10; 
        } 

    return $sum; 

    }

    

}



?>