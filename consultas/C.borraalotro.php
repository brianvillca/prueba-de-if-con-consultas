<?php
include "./connection.php";

$apellido = $_POST['apellido'];

// Buscar el ID del registro que coincide con el apellido dado
$query_select = "SELECT id FROM civiles WHERE apellido = '$apellido' LIMIT 1";
$result_select = mysqli_query($connection, $query_select);

if (mysqli_num_rows($result_select) > 0) {
    $row = mysqli_fetch_assoc($result_select);
    $id = $row['id'] + 1; // Obtener el siguiente ID

    // Eliminar el registro con el siguiente ID
    $query_delete = "DELETE FROM civiles WHERE id = '$id'";
    if (mysqli_query($connection, $query_delete)) {
        echo "Registro con ID $id eliminado correctamente.";
    } 
} else {
    echo "No se encontro a la persona para borrar al otro.";
}
 
?>
