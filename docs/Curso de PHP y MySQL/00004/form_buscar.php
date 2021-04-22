<?php
$url_actual = $_SERVER['PHP_SELF'];
echo "<form action='$url_actual' method='POST'>";
echo ' <b>';
echo ' Nombre:';
echo '</b>';
echo '<input id="campo" name="campo" type="text"/>';
echo '<input class="btn btn-info" id="enviar" name="enviar" type="submit" value="Buscar"/>';
echo '</form>';
