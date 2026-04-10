<?php

$a=4;
$b=6;
$c=10;
$max=0;
$array=[$a,$b,$c];
 foreach($array as $x){
    if($x>$max){
        $max=$x;
    }
 } print("Largest number: {$max}");

?>