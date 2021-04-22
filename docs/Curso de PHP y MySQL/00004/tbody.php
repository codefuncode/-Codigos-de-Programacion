<?php
foreach ($conn->query($sql) as $row) {

    echo "<tr>";

    echo "<td>";
    echo $row['id'];
    echo "</td>";

    echo "<td>";
    echo $row['nombre'];
    echo "</td>";

    echo "<td>";
    echo $row['correo'];
    echo "</td>";

    echo "<td>";
    echo $row['telefono'];
    echo "</td>";

    echo "<td>";
    $id = $row['id'];
    echo "<a href='modificar.php?id=$id'>";
    echo '<span class="glyphicon glyphicon-pencil">';
    echo '</span>';
    echo '</a>';
    echo '</td>';

    echo '<td>';
    echo "<a data-href='eliminar.php?id=$id' " .
        "data-target='#confirm-delete' " .
        "data-toggle='modal' " .
        "href='#'>";
    echo '<span class="glyphicon glyphicon-trash">';
    echo '</span>';
    echo '</a>';
    echo '</td>';

    echo ' </tr>';

}
