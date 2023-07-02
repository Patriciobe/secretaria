<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Tu proyecto</title>

    <!-- Enlaza los archivos de los estilos y scripts -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="node_modules/datatables.net-dt/css/jquery.dataTables.min.css">
      <!-- Enlaza el archivo CSS de la extensión Responsive -->
    <link rel="stylesheet" type="text/css" href="responsive.min.css">
   
   
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="node_modules/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="node_modules/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="node_modules/pdfmake/build/pdfmake.min.js"></script>
    <script src="node_modules/pdfmake/build/vfs_fonts.js"></script>
    <script src="node_modules/datatables.net-buttons/js/buttons.print.min.js"></script>
     <!-- Enlaza el archivo JavaScript de la extensión Responsive -->
    <script src="responsive.min.js"></script>
    
    
   
   
    
    <style>
        body {
            cursor: pointer;
        }

        .resaltada {
            background-color: yellow !important;
        }
    </style>
</head>
<body>

<div>
     <?php include_once 'views/header.php'; ?>
</div>

<div class="datatables">
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
</div>


    <div id="datos"></div>
    <div id="form">
  <form action="subir.php" method="POST" enctype="multipart/form-data">
    <div>
      <div>   
        <label for="file">Subir imagen</label>  
      </div>
      <input type="file" id="file" name="file">  
    </div> 
    <div>
      <div> 
        <label for="desc">Descripción</label> 
      </div> 
      <input type="text" id="desc" name="desc">  
    </div>
    <div>    
      <input type="submit" value="Subir">  
    </div>                      
  </form>
</div>
<!-- Inicializa DataTables con responsividad de columnas -->
<script>
$(document).ready(function() {
  var tabla = $('#miTabla').DataTable({
    paging: true,
    searching: true,
    ordering: true,
    autoWidth: false, // Deshabilita el ajuste automático del ancho de las columnas
    responsive: true, // Habilita la responsividad de las columnas
    columnDefs: [
      { responsivePriority: 1, targets: 0 }, // Prioriza la primera columna en la responsividad
      { responsivePriority: 2, targets: -1 } // Prioriza la última columna en la responsividad
    ],
    dom: 'Bfrtip',
    buttons: [
      'copy', 'csv', 'excel', 'pdf', 'print'
    ]
  });

  $('#miTabla tbody').on('click', 'tr', function() {
    if ($(this).hasClass('resaltada')) {
      $(this).removeClass('resaltada');
    } else {
      tabla.$('tr.resaltada').removeClass('resaltada');
      $(this).addClass('resaltada');
      var rowData = tabla.row(this).data();
      //$('#datos').text(JSON.stringify(rowData));
      $("#desc").val(rowData[1]); 
    }
  });
});
</script>


    <div id ="dropzonejs">
    <iframe src="dropzonejs/" class="dropzonejs"></iframe>
    
    </div>
    <div id ="pdfjs">
    <iframe src="pdfjs/web/viewer.html" class="pdfjs"></iframe>
    </div>
   
    
        

    
    </body>
    
</html>
