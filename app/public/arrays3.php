<?php

print "1. array_values() toma un arreglo asociativo y lo convierte en indexado<br>";
$arreglo = array("cielo"=>"azul", "pasto"=>"verde","manzana"=>"rojo");
print_r(array_values($arreglo));
print "<br><br>";

print "2. array_keys() Devuelve todas las llaves de un arreglo o un subconjunto de llaves de un arreglo.<br>";
$arreglo = array("cielo"=>"azul", "pasto"=>"verde","manzana"=>"rojo");
print_r(array_keys($arreglo));
print "<br><br>";

print "2. array_keys() Regresa todas las coincidencias en un arreglo.<br>";
$arreglo = array("azul", "verde","rojo","verde","rojo","azul");
print_r(array_keys($arreglo,"rojo"));
print "<br><br>";

print "3. array_combine: Crea un nuevo arreglo, usando un arreglo para las llaves y otra para los valores.<br>";
$llaves = array("cielo", "pasto","manzana");
$valores = array("azul", "verde","rojo");
print_r(array_combine($llaves,$valores));
print "<br><br>";

print "4. array_key_exists() Verifica si el índice o llave dada existe en el arreglo..<br>";
$arreglo = array("cielo"=>"azul", "pasto"=>"verde","manzana"=>"rojo");
print_r(array_key_exists("perico",$arreglo));
print "<br><br>";

print "5. array_search() Busca un valor determinado en un arreglo y devuelve la primera llave correspondiente en caso de encontrarla.<br>";
$arreglo = array("cielo"=>"azul", "pasto"=>"verde","manzana"=>"rojo");
print_r(array_search("perico",$arreglo));
print "<br>";
print_r(array_search("azul",$arreglo));
print "<br>";
print_r(array_search("rojo",$arreglo));
print "<br>";


$arreglo = ["llaveVieja"=>12345];
var_dump($arreglo);

if (isset($arreglo["llaveVieja"])) {
  $arreglo["llaveNueva"] = $arreglo["llaveVieja"];
  unset( $arreglo["llaveVieja"]);
}
print "<br>";
var_dump($arreglo);



?>
