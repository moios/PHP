<?php
$dia[0] = "Lunes";
$dia[1] = "Martes";
$dia[2] = "Miércoles";
$dia[3] = "Jueves";
$dia[4] = "Viernes";
$dia[5] = "Sábado";
$dia[6] = "Domingo";

$hoy = date("N") - 1;
print("El valor de hoy:".$hoy);
print("<br>Hoy es: ".$dia[$hoy]);

print("<h4>Los dias son</h4>");
for($x = 0 ; $x < count($dia) ; $x++){
    if($x == $hoy){
        print("<button>".$dia[$x]."</button><br>");
    }else{
        print($dia[$x]."<br> ");
    }  
}