<?php

  $input = array("(1,2)", "(2,2)", "(3,2)", "(4,2)", "(5,2)", "(6,2)", "(7,2)", "(8,2)");
  
$a = str_replace('(','',$input[0]);

$a = str_replace(')','',$a);



$a=array_map('intval', explode(',', $a));
$new = [];
foreach($input as $value){
	$value = str_replace('(','',$value);
	$value = str_replace(')','',$value);
	$value=array_map('intval', explode(',', $value));
	array_push($new,$value);
}

var_dump($new);

  
  
  ?>