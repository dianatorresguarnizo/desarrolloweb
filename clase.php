<?php
    echo "<h1>"."Hola Mundo en PHP"."</h1>"."<br>";
    echo "<h2>"."Variables"."</h2>";
    $nombre = "Diana";
    $_edad = 25;
    echo "Mi nombres es: ".$nombre." y mi edad es: ".$_edad."</br>";
    echo "<h2>"."Operadores de Comparación"."</h2>";
    $num1 = 5;
    $num2 = 6;
    echo "<h2>"."Estructura Control IF"."</h2>";
    if($num1 > $num2)
        echo "Numéro 1 es mayor"."</br>";
    else
        echo "Numéro 1 es menor"."</br>";
    echo "<h2>"."Operaciones Matemáticas"."</h2>";
        echo "Suma es:".$num1 + $num2."</br>";
        echo "Multiplicación es:".$num1 * $num2."</br>";
    echo "<h2>"."Estructura Control WHILE"."</h2>";
    $n = 5;
    while ($n<=5) {
        echo "Hoy es Lunes"."</br>";
        $n++;
    }
    echo "<h2>"."Estructura Control DO WHILE"."</h2>";
    $m = 6;
    do {
        echo "Hoy es Lunes"."</br>";
        $m++;
    }while ($m<=5); 
?>