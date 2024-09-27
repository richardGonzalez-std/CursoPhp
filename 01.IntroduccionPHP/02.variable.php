<?php

#variable numerica
$numero = 5;

echo "Esto es una variable número: $numero";
    var_dump($numero);
#variable texto
echo "<br><br>";
$palabra = "Palabra";

echo "Esto es una variable $palabra<br>"; var_dump($palabra);
#variable booleana

$boolean = false;
echo "<br><br>";
echo "Esto es una variable boolean: $boolean<br>";
var_dump($boolean);
#variable arreglo
echo "<br><br>";

$colores = array("rojo","amarillo");
echo "Esto es una variable arreglo: $colores[1]<br>";
var_dump($colores);
#variable arreglo con propiedades
echo "<br><br>";
$verduras = array("Verdura1"=>"lechuga","Verdura2"=>"cebolla");
echo "Esto es una variable arreglo con propiedades: $verduras[Verdura1]<br>";
var_dump($verduras);

#variable objeto
echo "<br><br>";
$frutas = (object)["fruta1"=>"Pera", "fruta2"=>"Manzana"];
echo "Esto es una variable objeto: $frutas->fruta2<br>"; 
var_dump($frutas);
?>