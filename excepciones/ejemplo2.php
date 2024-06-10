<?php
class Calculadora {
    public function suma($a, $b) {
        if (!is_numeric($a) || !is_numeric($b)) {
            throw new Exception("Suma: Ambos valores deben ser numéricos.");
        }
        return $a + $b;
    }

    public function resta($a, $b) {
        if (!is_numeric($a) || !is_numeric($b)) {
            throw new Exception("Resta: Ambos valores deben ser numéricos.");
        }
        return $a - $b;
    }
}

try {
    $calc = new Calculadora();
    echo "Suma: ".$calc->suma(10, "dos")."<br>"; // Lanza excepción
} catch (Exception $e) {
    echo 'Excepción: ' . $e->getMessage()."<br>";
}

try {
    echo "Resta: ".$calc->resta(10, 5)."<br>"; // Funciona correctamente
} catch (Exception $e) {
    echo 'Excepción: ' . $e->getMessage()."<br>";
}
?>
