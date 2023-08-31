<?php
// Incluye el archivo de configuración
require_once 'config.php';

// Función para establecer la conexión a la base de datos
function conectar() {
    $conexion = new mysqli('localhost', 'id21112562_root', 'k|6Q8Tny-5h88PDz', 'id21112562_chances');

    if ($conexion->connect_error) {
        die('Error de conexión: ' . $conexion->connect_error);
    }

    return $conexion;
}

// Función para cerrar la conexión a la base de datos
function desconectar($conexion) {
    $conexion->close();
}
?>