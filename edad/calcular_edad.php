<?php

// Verificar si se ha enviado una fecha de nacimiento
if(isset($_POST['fecha_nacimiento'])) {
    // Obtener la fecha de nacimiento del formulario
    $fechaNacimiento = $_POST['fecha_nacimiento'];

    // Función para calcular la edad
    function calcularEdad($fechaNacimiento) {
        // Convertir la fecha de nacimiento a un objeto DateTime
        $fechaNacimiento = new DateTime($fechaNacimiento);
        // Obtener la fecha actual
        $fechaActual = new DateTime();
        // Calcular la diferencia entre las fechas
        $diferencia = $fechaActual->diff($fechaNacimiento);
        // Obtener la edad en años
        $edad = $diferencia->y;
        return $edad;
    }

    // Llamada a la función calcularEdad() para obtener la edad
    $edad = calcularEdad($fechaNacimiento);

    // Mostrar la edad
    echo "<h2>Tu Edad:</h2>";
    echo "<p>Tienes " . $edad . " años.</p>";
} else {
    // Si no se ha enviado una fecha de nacimiento, mostrar un mensaje de error
    echo "<h2>Error:</h2>";
    echo "<p>No se ha proporcionado una fecha de nacimiento.</p>";
}

?>
