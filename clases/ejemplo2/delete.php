<?php
    include_once 'database.php';
    include_once 'empleado.php';

    $database = new Database();
    $db = $database->getConnection();

    $empleado = new Empleado($db);

    $empleado->id = $_POST['id'];

    if($empleado->delete()) {
        echo "Empleado eliminado con éxito.";
    } else {
        echo "No se pudo eliminar el empleado.";
    }
?>
