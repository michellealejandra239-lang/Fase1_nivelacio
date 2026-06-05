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


<?php

include("funciones.php");

echo "<h2>Fase 3: Modularización y Funciones</h2>";

echo "Resultado de la suma: " . sumar(8, 4);

echo "<br><br>";

echo validarNombre("Michelle");

?>