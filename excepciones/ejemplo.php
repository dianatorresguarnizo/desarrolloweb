<?php

function dividir($dividendo, $divisor) {
    if ($divisor == 0) {
        throw new Exception("División por cero"."<br>");
    }
    return $dividendo / $divisor;
}

try {
    echo dividir(8,0);
} catch (Exception $e) {
    echo "Excepción capturada: " . $e->getMessage()."<br>";
} finally {
    echo "<br>"."Este bloque siempre se ejecuta."."<br>";
}

?>
