<?php


//1. Write a PHP script to calculate the area and perimeter of a Rectangle, 
//and display the result. 
//Hints: The area of a Rectangle = length × width, perimeter = 2 × (length


$w=5;
$h=10;
$a= $w * $h;
$p=2* ($w + $h);

echo "Width= 5 m <br>";
echo "Height= 10 m <br>";
echo "Area: {$a} m^2 <br>";
echo "Paimeter: {$p} m";


for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

?>