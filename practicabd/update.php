<?php

require 'conexion.php';

$sql = "UPDATE personas SET nombre = 'Juanito' WHERE cedula = '1111111111'";

if(mysqli_query($conexion,$sql)) {
    echo "Persona actualizada";
}
else {
    echo "Error". mysqli_connect_error();
}

?>