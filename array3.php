<?php
$productos = array(
    array("heladera",2500,15), array("microonda",1200,3),
    array("cocina",4500,5),array("horno",3000,12)
);

for($x = 0 ; $x < count($productos);$x++){
    print("<br>".$productos[$x][0]. ", precio: ".$productos[$x][1]);
}

echo "<hr>";
for($x = 0 ; $x < count($productos);$x++){
    print("<br>Producto $x");
    for($y = 0 ; $y < 3 ; $y++){
        print($productos[$x][$y]. " - ");
    }
}

echo "<hr>";
foreach($productos as $p){
    foreach($p as $item){
        print($item. " | ");
    }
}