
<?php




for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}


echo "<br><br><br>";

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= (4 - $i); $j++) {
        echo $j . " ";
    }
    echo "<br>";
}

echo "<br><br><br>";

$letters = ['A', 'B', 'C', 'D', 'E', 'F'];
$index = 0;
for ($row = 1; $row <= 3; $row++) {
    for ($col = 1; $col <= $row; $col++) {
        echo $letters[$index++];
        if ($col < $row) echo " ";
    }
    echo "<br>";
}

?>