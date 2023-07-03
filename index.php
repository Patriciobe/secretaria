<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/customCss/styles.css">
    <title>Tu proyecto</title>

    <!-- STYLES TEXTT CSS ////////////////////////////////////////////////////////////////// -->
    <!-- Enlaza los archivos de los estilos y scripts -->
    <link rel="stylesheet" href="CSS/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="CSS/responsiveDatatables/jquery.dataTables.min.css">
      <!-- Enlaza el archivo CSS de la extensión Responsive -->
    <link rel="stylesheet" type="text/css" href="CSS/responsiveDatatables/responsive.min.css">
    <!--///////////////////////////////////////////////////////////////////////////////////// -->
  



    <!-- SCRIPTS JS /////////////////////////////////////////////////////////////////////////-->
    <script src="JS/jquery.min.js"></script>
    <script src="JS/popper/popper.min.js"></script> 
    <script src="JS/bootstrap.min.js"></script> 
    <script src="JS/jquery.dataTables.min.js"></script>
    <script src="JS/dataTables.buttons.min.js"></script>
    <script src="JS/buttons.html5.min.js"></script>
    <!-- <script src="node_modules/pdfmake/build/pdfmake.min.js"></script>  -->
    <!-- <script src="node_modules/pdfmake/build/vfs_fonts.js"></script>  -->
    <script src="JS/buttons.print.min.js"></script>
     <!-- Enlaza el archivo JavaScript de la extensión Responsive -->
    <script src="CSS/responsiveDatatables/responsive.min.js"></script>
     <!--///////////////////////////////////////////////////////////////////////////////////// -->
</head>

<!-- BODY ///////////////////////////////////////////////////////////////////////////////////////// -->
<body>

<div>
     <?php include_once 'views/head.php'; ?> 
</div>

<div class="datatables">
     <?php include_once 'views/tabla.php'?>
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
