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

    <link rel="stylesheet" href="dropzonejs/CSS/basic.css">
    <link rel="stylesheet" href="dropzonejs/CSS/styles.css">
    <!--///////////////////////////////////////////////////////////////////////////////////// -->
  




</head>

<!-- BODY ///////////////////////////////////////////////////////////////////////////////////////// -->
<body>



<div>
     <?php include_once 'views/head.php'; ?> 
</div>



<div class="datatables">
     <?php include_once 'views/tabla.php'?>
     <!-- Inicializa DataTables con responsividad de columnas -->
</div>


    <div id="datos"></div>


<div id="form">
     <?php include_once 'views/form.php'?>
      <!-- dropzonejs -->
</div>




    <div id ="dropzonejs">
    <iframe src="dropzonejs/" class="dropzonejs"></iframe>
    
    </div>
    <div id ="pdfjs">
    <iframe src="pdfjs/web/viewer.html" class="pdfjs"></iframe>
    </div>
   
    
        

    <!-- SCRIPTS JS /////////////////////////////////////////////////////////////////////////-->
    
    <script src="JS/jquery.min.js"></script>
    <script src="JS/popper/popper.min.js"></script> 
    <script src="JS/bootstrap.min.js"></script> 
    <script src="JS/jquery.dataTables.min.js"></script>
    <script src="JS/dataTables.buttons.min.js"></script>
    <script src="JS/buttons.html5.min.js"></script>
    <script src="JS/print/pdfmake.min.js"></script> 
    <script src="JS/print/vfs_fonts.js"></script>  
    <script src="JS/buttons.print.min.js"></script>
     <!-- Enlaza el archivo JavaScript de la extensión Responsive -->
    <script src="CSS/responsiveDatatables/responsive.min.js"></script>
    <script src="dropzonejs/JS/dropzone-min.js"></script>
    <script src="dropzonejs/JS/app.js"></script>
    
    <script src="JS/customJS/data_Tables.js"></script>
     <!--///////////////////////////////////////////////////////////////////////////////////// -->    
    </body>
    
</html>
