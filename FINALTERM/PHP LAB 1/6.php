<?php
$array=[5,6,8,4,6,9,10];
$x=9;
$flag=0;
foreach($array as $a){
    if($a==$x){
        $flag=1;
        break;
    }
}
if($flag){
    print("{$a} is found<br>");
}else{
    print("Not found");
}
?>