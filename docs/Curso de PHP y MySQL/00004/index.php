<?php
require '../php/conexion.php';

$where = "";

if (!empty($_POST)) {
    $valor = $_POST['campo'];
    if (!empty($valor)) {
        $where = "WHERE nombre LIKE '%$valor'";
    }
}
$sql       = "SELECT * FROM personas $where";
$resultado = $conn->
query($sql)

    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="../css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
    <script src="../js/jquery-3.1.0.js" type="text/javascript">
    </script>
    <script src="../js/bootstrap.js" type="text/javascript">
    </script>
    <title>
      Document
    </title>
  </head>
  <body style="padding: 0px 100px;">
    <div class="container">
      <div class="row">
        <h2 style="text-align: center">
          Curso de PHP y MySQL
        </h2>
      </div>
    </div>
    <div class="row">
      <a class="btn btn-primary" href="nuevo.php" style="margin-bottom: 25px;">
        Nuevo Registro
      </a>
      <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
        <b>
          Nombre:
        </b>
        <input id="campo" name="campo" type="text"/>
        <input class="btn btn-info" id="enviar" name="enviar" type="submit" value="Buscar"/>
      </form>
    </div>
    <br/>
    <div class="row table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>
              ID
            </th>
            <th>
              Nombre
            </th>
            <th>
              Email
            </th>
            <th>
              Telefono
            </th>
            <th>
            </th>
            <th>
            </th>
          </tr>
        </thead>
        <tbody>
          <?php include "tbody.php";?>
        </tbody>
      </table>
    </div>
    <!-- Modal -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="confirm-delete" role="dialog" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
              ×
            </button>
            <h4 class="modal-title" id="myModalLabel">
              Eliminar Registro
            </h4>
          </div>
          <div class="modal-body">
            ¿Desea eliminar este registro?
          </div>
          <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal" type="button">
              Cancel
            </button>
            <a class="btn btn-danger btn-ok">
              Delete
            </a>
          </div>
        </div>
      </div>
    </div>
    <script>
      $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

        $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
      });
    </script>
  </body>
</html>