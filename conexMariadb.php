<?php

// Configuración de la conexión
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'db_administrador_de_archivos';

// Creación de la conexión
$conn = mysqli_connect($host, $user, $password, $dbname);

// Verificación de la conexión
if (!$conn) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}
//echo "Conexión exitosa";

// Cierre de la conexión
//mysqli_close($conn);

?>