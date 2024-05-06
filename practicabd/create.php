<?php

require 'conexion.php';

$sql = "INSERT INTO personas (cedula, nombre, apellido, fecha_nacimiento) VALUES('110416004','Alex', 'Guerrón', '1986-04-12')";

if(mysqli_query($conexion,$sql)) {
    echo "Persona creada";
}
else {
    echo "Error". mysqli_connect_error();
}

?>