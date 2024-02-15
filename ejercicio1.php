<?php
$llueve = "no";
$es_feriado = "no";
$es_finde = "no";
#programa que devuelve si eres mayor o menor de edad
if($llueve == "si" || $es_feriado == "si"  || $es_finde == "si"){
    print("me quedo en casa");
}else{
    print("me voy al snpp");
}
print("<hr>");
$llueve2 = 1;
$es_feriado2 = null;
$es_finde2 = null;
if($llueve2 || $es_feriado2  || $es_finde2){
    print("me quedo en casa DOS");
}else{
    print("me voy al snpp DOS");
}
