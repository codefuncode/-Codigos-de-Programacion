<?php
$row['estado_civil'] = "SOLTERO";
$row['hijos']        = "1";
$row['intereses']    = "Libros Deportes Musica Otros";

if (isset($row['nombre'])) {

    $nombre = $row['nombre'];

} else {

    $nombre = "xxxxxxxx";
}

if (isset($row['id'])) {

    $id = $row['id'];

} else {

    $id = "xxxxxxxx";
}

if (isset($row['correo'])) {

    $correo = $row['correo'];

} else {

    $correo = "xxxxxxxx";
}

if (isset($row['telefono'])) {

    $telefono = $row['telefono'];

} else {

    $telefono = "xxxxxxxx";
}
if (isset($row['id'])) {

    $id = $row['id'];

} else {

    $id = "xxxxxxxx";
}
if (isset($row['id'])) {

    $id = $row['id'];

} else {

    $id = "xxxxxxxx";
}

if ($row['estado_civil'] == 'SOLTERO') {
    $soltero = "selected";
} else {
    $soltero = '';
}

if ($row['estado_civil'] == 'CASADO') {
    $casado = "selected";
} else {
    $casado = '';
}

if ($row['estado_civil'] == 'OTRO') {
    $otro = "selected";
} else {
    $otro = '';
}

if ($row['hijos'] == '1') {
    $hijos_si = "checked";
    $hijos_no = "";
} else if ($row['hijos'] == '0') {
    $hijos_si = "";
    $hijos_no = "checked";
}

echo '<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">';

echo '<div class="form-group">';

echo '<label for="nombre" class="col-sm-2 control-label"> Nombre </label>';
echo '<div class="col-sm-10">';
echo "<input " .
    "type='text' " .
    "class='form-control' " .
    "id='nombre' " .
    "name='nombre' " .
    "placeholder='Nombre' " .
    "value='$nombre' " .
    "required />";
echo '</div>';

echo '</div>';

echo "<input type='hidden' id='id' name='id' value='$id'/>";

echo '<div class="form-group">';

echo '<label for="email" class="col-sm-2 control-label"> Email </label>';

echo '<div class="col-sm-10">';
echo "<input " .
    "type='email' " .
    "class='form-control' " .
    "id='email' " .
    "name='email' " .
    "placeholder='Email' " .
    "value='$correo' " .
    "required />";
echo '</div>';

echo '</div>';

echo '<div class="form-group">';

echo '<label for="telefono" class="col-sm-2 control-label">Telefono</label>';
echo '<div class="col-sm-10">';

echo "<input type='tel' class='form-control' id='telefono' name='telefono' placeholder='Telefono' value='$telefono' />";
echo '</div>';

echo '</div>';

echo '<div class="form-group">';
echo '<label for="estado_civil" class="col-sm-2 control-label">Estado Civil</label>';
echo '<div class="col-sm-10">';
echo '<select class="form-control" id="estado_civil" name="estado_civil">';
echo "<option value='SOLTERO' $soltero >SOLTERO</option>";
echo "<option value='CASADO' $casado >CASADO</option>";
echo "<option value='OTRO' $otro >OTRO</option>";
echo '</select>';
echo '</div>';
echo '</div>';
echo '<div class="form-group">';
echo '<label for="hijos" class="col-sm-2 control-label">¿Tiene Hijos?</label>';
echo '<div class="col-sm-10">';
echo '<label class="radio-inline">';
echo "<input type='radio' id='hijos' name='hijos' value='1' $hijos_si /> SI";
echo '</label>';
echo '<label class="radio-inline">';
echo "<input type='radio' id='hijos' name='hijos' value='0' $hijos_no /> NO";
echo '</label>';
echo '</div>';
echo '</div>';
echo '<div class="form-group">';
echo '<label for="intereses" class="col-sm-2 control-label">INTERESES</label>';
echo '<div class="col-sm-10">';
echo '<label class="checkbox-inline">';
// echo 'string';
// echo 'string';
// echo 'string';
// echo 'string';
// echo 'string';
// echo 'string';
// echo 'string';
// echo 'string';
// echo 'string';
// echo 'string';
// echo 'string';
// echo 'string';
// echo 'string';
?>




<input type="checkbox" id="intereses[]" name="intereses[]" value="Libros" <?php if (strpos($row['intereses'], "Libros") !== false) {
    echo 'checked';
}
?>> Libros
</label>

<label class="checkbox-inline">
<input type="checkbox" id="intereses[]" name="intereses[]" value="Musica" <?php if (strpos($row['intereses'], "Musica") !== false) {
    echo 'checked';
}
?>> Musica
</label>

<label class="checkbox-inline">
<input type="checkbox" id="intereses[]" name="intereses[]" value="Deportes" <?php if (strpos($row['intereses'], "Deportes") !== false) {
    echo 'checked';
}
?>> Deportes
</label>

<label class="checkbox-inline">
<input type="checkbox" id="intereses[]" name="intereses[]" value="Otros" <?php if (strpos($row['intereses'], "Otros") !== false) {
    echo 'checked';
}
?>> Otros
</label>
</div>
</div>

<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<a href="index.php" class="btn btn-default">Regresar</a>
<button type="submit" class="btn btn-primary">Guardar</button>
</div>
</div>
</form>
