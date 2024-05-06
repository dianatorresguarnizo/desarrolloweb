<?php

require 'conexion.php';

//Procesar los datos del formulario

if($_SERVER["REQUEST_METHOD"] = "POST") {

    $cedula = $_POST["cedula"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $fecha = $_POST["fecha"];

}

$sql = "INSERT INTO personas (cedula, nombre, apellido, fecha_nacimiento) VALUES('$cedula','$nombre', '$apellido', '$fecha')";

if(mysqli_query($conexion,$sql)) {
    echo "Persona creada";
}
else {
    echo "Error". mysqli_connect_error();
}

mysqli_close($conexion);

?>