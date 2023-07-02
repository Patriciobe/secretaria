// Código JavaScript en app.js

document.addEventListener('DOMContentLoaded', function() {
    // Inicializar Dropzone en el formulario con el ID "myDropzone"
    var myDropzone = new Dropzone('#myDropzone', {
      url: 'upload.php', // Cambia esta URL según tus necesidades
      maxFilesize: 5, // Tamaño máximo del archivo en MB
      maxFiles: 3, // Número máximo de archivos permitidos
      addRemoveLinks: true, // Mostrar enlaces para eliminar archivos
      dictRemoveFile: 'Quitar' // Texto del enlace para eliminar archivos
    });
  
    // Evento que se dispara cuando se agrega un archivo
    myDropzone.on('addedfile', function(file) {
      console.log('Archivo agregado:', file);
    });
  
    // Evento que se dispara cuando se elimina un archivo
    myDropzone.on('removedfile', function(file) {
      console.log('Archivo eliminado:', file);
    });
  
    // Evento que se dispara cuando se completa la carga de todos los archivos
    myDropzone.on('complete', function() {
      console.log('Carga completa de archivos');
    });
  
    // Evento que se dispara cuando se envía el formulario
    myDropzone.on('sending', function(file, xhr, formData) {
      console.log('Enviando archivo:', file);
      // Puedes agregar datos adicionales al formData si es necesario
      /* Por ejemplo:*/ formData.append('nombre', 'valor');
      alert("Enviando Archivo"+ file);
    });
  
    // Evento que se dispara cuando se recibe una respuesta del servidor después de la carga del archivo
    myDropzone.on('success', function(file, response) {
      console.log('Respuesta del servidor:', response);
      alert("Respuesta del servidor"+response);
    });
  
    // Evento que se dispara cuando ocurre un error durante la carga del archivo
    myDropzone.on('error', function(file, errorMessage) {
      console.log('Error en la carga del archivo:', errorMessage);
      alert("Error en la carga del archivo:"+errorMessage);
    });
  
    // Evento que se dispara cuando todos los archivos han sido cargados correctamente
    myDropzone.on('queuecomplete', function() {
      console.log('Todos los archivos cargados correctamente');
      alert("Todos los archivos cargados correctamente");
      // Puedes realizar acciones adicionales después de que se carguen todos los archivos
    });
  });
  