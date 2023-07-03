<table id="miTabla">
        <!-- Estructura de la tabla -->
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Usuario</th>
                <th>Clave</th>
                <th>Email</th>
                <th>direccion_id</th>
                <th>Archivo_id</th>
            </tr>
        </thead>
        <tbody>
<?php include_once 'conexMariadb.php';?>


   
<?php
// Consulta SQL para seleccionar todos los registros de la tabla
$query = "SELECT * FROM tb_usuario";

// Ejecución de la consulta
$result = mysqli_query($conn, $query);

// Verificación de que la consulta haya devuelto resultados
if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['apellido'] . "</td>"; 
        echo "<td>" . $row['telefono'] . "</td>";
        echo "<td>" . $row['usuario'] . "</td>";
        echo "<td>" . $row['clave'] . "</td>";
        echo "<td>" . $row['mail'] . "</td>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row["id"] . "</td>";
        echo "</tr>";
    }
    echo "";
} else {
    // En caso de que no haya resultados, se muestra un mensaje
    echo "No hay resultados";
}

?>
        </tbody>
    </table>