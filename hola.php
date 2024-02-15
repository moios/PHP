<?php
#declarar variables
$nombre = "moises";#string
$edad = 35;
$num1 = 15;
$num2 = 3;
print("<h1>holaaa $nombre </h1>");
echo "Bueno, ".$nombre." tu edad es ".$edad;
echo "<br>Suma: ".$num1 + $num2; 
echo "<br>Resta: ".$num1 - $num2; 

echo "<br>Mayor que ".($num1 > $num2); #true
echo "<br>Menor que ".($num1 < $num2); #false
echo "<br>mayor o igual  ".($num1 >= $num2);
echo "<br>Menor o igual ".($num1 <= $num2);
echo "<br>iguales ".($num1 == $num2);
echo "<br>Distintos ".($num1 != $num2);
?>