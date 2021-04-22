<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="../css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
    <script src="../js/bootstrap.js" type="text/javascript">
    </script>
    <script src="../js/jquery-3.1.0.js" type="text/javascript">
    </script>
    <title>
      Document
    </title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <h3 style="text-align:center">
          NUEVO REGISTRO
        </h3>
      </div>
      <form action="guardar.php" autocomplete="off" class="form-horizontal" method="POST">
        <div class="form-group">
          <label class="col-sm-2 control-label" for="nombre">
            Nombre
          </label>
          <div class="col-sm-10">
            <input class="form-control" id="nombre" name="nombre" placeholder="Nombre" required="" type="text"/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label" for="email">
            Email
          </label>
          <div class="col-sm-10">
            <input class="form-control" id="email" name="email" placeholder="Email" required="" type="email"/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label" for="telefono">
            Telefono
          </label>
          <div class="col-sm-10">
            <input class="form-control" id="telefono" name="telefono" placeholder="Telefono" type="tel"/>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label" for="estado_civil">
            Estado Civil
          </label>
          <div class="col-sm-10">
            <select class="form-control" id="estado_civil" name="estado_civil">
              <option value="SOLTERO">
                SOLTERO
              </option>
              <option value="CASADO">
                CASADO
              </option>
              <option value="OTRO">
                OTRO
              </option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label" for="hijos">
            ¿Tiene Hijos?
          </label>
          <div class="col-sm-10">
            <label class="radio-inline">
              <input checked="" id="hijos" name="hijos" type="radio" value="1"/>
              SI
            </label>
            <label class="radio-inline">
              <input id="hijos" name="hijos" type="radio" value="0"/>
              NO
            </label>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label" for="intereses">
            INTERESES
          </label>
          <div class="col-sm-10">
            <label class="checkbox-inline">
              <input id="intereses[]" name="intereses[]" type="checkbox" value="Libros"/>
              Libros
            </label>
            <label class="checkbox-inline">
              <input id="intereses[]" name="intereses[]" type="checkbox" value="Musica"/>
              Musica
            </label>
            <label class="checkbox-inline">
              <input id="intereses[]" name="intereses[]" type="checkbox" value="Deportes"/>
              Deportes
            </label>
            <label class="checkbox-inline">
              <input id="intereses[]" name="intereses[]" type="checkbox" value="Otros"/>
              Otros
            </label>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <a class="btn btn-default" href="index.php">
              Regresar
            </a>
            <button class="btn btn-primary" type="submit">
              Guardar
            </button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
