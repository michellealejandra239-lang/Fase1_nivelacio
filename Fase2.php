<?php

echo "<h2>Fase 2: Lógica de Programación</h2>";

echo "<h3>Ciclo For</h3>";

for($i = 1; $i <= 5; $i++){
    echo "Número: $i <br>";
}

echo "<br>";

echo "<h3>Ciclo While</h3>";

$contador = 1;

while($contador <= 5){
    echo "Contador: $contador <br>";
    $contador++;
}

echo "<br>";

echo "<h3>Arreglos</h3>";

$frutas = array("Manzana", "Pera", "Uva");

foreach($frutas as $fruta){
    echo $fruta . "<br>";
}

?>