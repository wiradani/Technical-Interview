<?php

 class Problem {
  public $name;
  public $input;

  

  function set_name($name) {
    $this->name = $name;
  }
  
  function get_name() {
    return $this->name;
  }

  function set_input($input) {
    $this->input = $input;
  }
  
  function get_input() {
    return $this->input;
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
        $max = 0; 
        $result; 
    
        
        for ( $i = 0; $i < 4; $i++)  
        { 
    
            
            for ( $j = 0; $j < 4; $j++)  
            { 
    
                
                // check horizontal row. 
                if (($j - 3) >= 0)  
                { 
                    $result = $arr[$i][$j] *  
                            $arr[$i][$j - 1] * 
                            $arr[$i][$j - 2] *  
                            $arr[$i][$j - 3]; 
                    
                    if ($max < $result) 
                        $max = $result; 
                } 
    
                  
                // check vertical row. 
                if (($i - 3) >= 0)  
                { 
                    $result = $arr[$i][$j] *  
                            $arr[$i - 1][$j] * 
                            $arr[$i - 2][$j] *  
                            $arr[$i - 3][$j]; 
                    
                    if ($max < $result) 
                        $max = $result; 
                } 
    
                 
                // check diagonal 
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

    
    function checkDiagonalKanan($arr1, $arr2)
    {
        for ($i=$arr1[0], $j=$arr1[1]; $i < 8 && $j < 8; $i++, $j++) { 
            
            if (in_array([$i,$j], $arr2) && $arr1 != [$i,$j]) {

                return true;
            }
        }
        return false;
    }

    function checkDiagonalKiri($arr1, $arr2)
    {
        for ($i=$arr1[0], $j=$arr1[1]; $i > 0 && $j < 8; $i--, $j++) { 
            if (in_array([$i,$j], $arr2) && $arr1 != [$i,$j]){
                return true;
            }
        }
        return false;
    }
    function canQueenAttack($arr1, $arr2) 
    { 
        foreach ($arr2 as $key => $value) {
         
            if($arr1 != $value){
                // horizontal
                if($arr1[1] == $value[1])
                    return true;
                // vertikal
                if($arr1[0] == $value[0])
                    return true;
            }
        }
        if ($this->checkDiagonalKanan($arr1, $arr2))
            return true;
        if ($this->checkDiagonalKiri($arr1, $arr2))
            return true;
        return false;
    } 

     public function findCrashPlace($arr){
        $arr = substr($arr, 1, -1);
        $arr = str_replace("rray","",$arr);
        $arr = substr($arr, 1); 
        $arr = str_replace(", ","|",$arr);
       
         
        $tmp  = explode( '|', $arr );
          $data = array();
      
      foreach ( $tmp as $k => $v )
      {
        $data[] = explode( ',', $v );
      }
      
       
       
      $new = [];
      foreach($data as $value){
          $value = str_replace('(','',$value);
          $value = str_replace(')','',$value);
          $value = str_replace('"', "", $value);
          $value=array_map('intval', $value);
          array_push($new,$value);
      }
      

        $n = count($new);
        $isExist = false;
        //loop for match
        for($i=0;$i<$n;$i++){
            if($this->canQueenAttack($new[$i], $new)){
                $isExist = true;
               //print (implode(" ",$new[$i]));
               return implode(" ",$new[$i],);
                break;
            }
        }
        if(!$isExist){
           // print("tidak ada");
           return "Tidak ditemukan" ;
        }

     }

    
}



?>