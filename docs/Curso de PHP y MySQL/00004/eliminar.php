<?php
require '../php/conexion.php';

// $id = $_GET['id'];

// $sql = "SELECT * FROM personas WHERE id = '$id'";
// $resultado = $mysqli->
// query($sql);
// $row       = $resultado->fetch_array(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/bootstrap-theme.css" rel="stylesheet"/>
    <script src="js/jquery-3.1.1.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>
  </head>
  <body style="padding: 0px 100px;">
    <div class="container">
      <div class="row">
        <h3 style="text-align:center">
          MODIFICAR REGISTRO
        </h3>
      </div>
      <?php include 'form_eliminar.php';?>
    </div>
  </body>
</html>
