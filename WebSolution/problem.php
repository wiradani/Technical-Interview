<?php

 class Problem {
  public $name;

  

  function set_name($name) {
    $this->name = $name;
  }
  
  function get_name() {
    return $this->name;
  }
  
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

    function findGreatestProduct( $arr) 
    { 
        $max = 0; $result; 
    
        // iterate the rows. 
        for ( $i = 0; $i < 4; $i++)  
        { 
    
            // iterate the columns. 
            for ( $j = 0; $j < 4; $j++)  
            { 
    
                // check the maximum product  
                // in horizontal row. 
                if (($j - 3) >= 0)  
                { 
                    $result = $arr[$i][$j] *  
                            $arr[$i][$j - 1] * 
                            $arr[$i][$j - 2] *  
                            $arr[$i][$j - 3]; 
                    
                    if ($max < $result) 
                        $max = $result; 
                } 
    
                // check the maximum product  
                // in vertical row. 
                if (($i - 3) >= 0)  
                { 
                    $result = $arr[$i][$j] *  
                            $arr[$i - 1][$j] * 
                            $arr[$i - 2][$j] *  
                            $arr[$i - 3][$j]; 
                    
                    if ($max < $result) 
                        $max = $result; 
                } 
    
                // check the maximum product in 
                // diagonal and anti - diagonal 
                if (($i - 3) >= 0 and ($j - 3) >= 0)  
                { 
                    $result = $arr[$i][$j] *  
                            $arr[$i - 1][$j - 1] * 
                            $arr[$i - 2][$j - 2] *  
                            $arr[$i - 3][$j - 3]; 
                    
                    if ($max < $result) 
                        $max = $result; 
                } 
            } 
        } 
    
        return $max; 
    } 

    function canQueenAttack($qx, $qy, $ox, $oy) 
    { 
        //check row
        if ($qx == $ox) 
            return true; 
    
        //check collumn
        if ($qy == $oy) 
            return true; 
    
        //check diagonal
        if (abs($qx - $ox) == abs($qy - $oy)) 
            return true; 
    
       
        return false; 
    } 

    public function findCrashPlace(){

        $input = "1,2 2,5 3,7 4,4 5,1 6,8 7,6 8,3";

        // convert to
        $xy = array_map(function($item) {
            return ['x' => strtok($item, ','), 'y' => strtok(',')];
        }, explode(' ', $input));

        $n = count($xy);

        for($i=0;i<$n;$i++){
            
        }
      

    }

    
}



?>