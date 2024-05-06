<?php

//Datos de conexión
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'empleados';

//Conexión
$conexion = mysqli_connect($servername,$username,$password,$database);

//Comprobar

if(!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
else    
    echo "Conexión Exitosa"."<br>";
?>