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

    public function findCrashPlace(){

        
    }
}



?>