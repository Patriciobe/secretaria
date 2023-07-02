<?php
// Verificar si se ha enviado algún archivo
include_once 'conexMariadb.php';
if (isset($_FILES['file'])) {
  $file = $_FILES['file'];
  $file_name = $_FILES["file"]["name"];
  $file_tmp = $_FILES["file"]["tmp_name"];
  $desc = $_POST["desc"];
   
  // Directorio de destino para guardar los archivos cargados
  $uploadDir = 'uploads/';

  // Nombre personalizado del archivo (si está disponible)
  $customFileName = $_POST['file-name'];

  // Obtener el nombre original del archivo
  $originalFileName = $file['name'];

  // Obtener la extensión del archivo original
  $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);

  // Generar el nuevo nombre del archivo
  $newFileName = ($customFileName !== '') ? $customFileName . '.' . $extension : $originalFileName;

  // Ruta completa del archivo de destino
  $uploadPath = $uploadDir . $newFileName;

  // Mover el archivo cargado al directorio de destino con el nuevo nombre
  if (move_uploaded_file($file['tmp_name'], $uploadPath)) {
    // Éxito en la carga del archivo
    $sql = "INSERT INTO archivos(nombre, descripcion, url) VALUES('$newFileName', '$desc', '$uploadPath')";
    $sql_query = mysqli_query($conn, $sql);
    $response = array(
      'status' => 'success',
      'message' => 'Archivo cargado correctamente',
      'filename' => $newFileName
    );
  } else {
    // Error en la carga del archivo
    $response = array(
      'status' => 'error',
      'message' => 'Error al cargar el archivo'
    );
  }

  // Devolver la respuesta como JSON
  echo json_encode($response);
}
?>
