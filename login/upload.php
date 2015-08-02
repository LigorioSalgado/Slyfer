<?php
session_start();
include_once='dbconfig.php';

?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>Login with Facebook</title>
    <link rel="stylesheet" type="text/css" href="../css/primary.css">
    <link rel="stylesheet" type="text/css" href="../css/wrapper.css">
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <link rel="stylesheet" type="text/css" href="../css/cuenta.css">

    <link rel="stylesheet" href="res/font-awesome/css/font-awesome.min.css">
<script href="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
<script src="post.js"></script>

 </head>
<?php
if ((($_FILES["file"]["type"] == "image/gif") ||
    ($_FILES["file"]["type"] == "image/jpeg") ||
    ($_FILES["file"]["type"] == "image/pjpeg")) &&
    ($_FILES["file"]["size"] < 20000)) {

    //Si es que hubo un error en la subida, mostrarlo, de la variable $_FILES podemos extraer el valor de [error], que almacena un valor booleano (1 o 0).
      if ($_FILES["file"]["error"] > 0) {
        echo $_FILES["file"]["error"] . "";
      } else {
        // Si no hubo ningun error, hacemos otra condicion para asegurarnos que el archivo no sea repetido
        if (file_exists("archivos/" . $_FILES["file"]["name"])) {
          echo $_FILES["file"]["name"] . " ya existe. ";
        } else {
         // Si no es un archivo repetido y no hubo ningun error, procedemos a subir a la carpeta /archivos, seguido de eso mostramos la imagen subida
          move_uploaded_file($_FILES["file"]["tmp_name"],
          "archivos/" . $_FILES["file"]["name"]);
          echo "Archivo Subido ";
            }
    } else {
        // Si el usuario intenta subir algo que no es una imagen o una imagen que pesa mas de 20 KB mostramos este mensaje
        echo "Archivo no permitido";
    }

?>


  <h1> Haz completado tu registro" </h1>

  <br>
  <h2>Con este codigo puede activar tu aplicacion movil:</h2>
  <br>
  <h2>

  </body>
</html>
