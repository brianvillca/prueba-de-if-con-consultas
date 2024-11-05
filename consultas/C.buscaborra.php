<?php
include "./connection.php";

$query = "SELECT * FROM civiles WHERE nombre = '" . $_POST['nombre'] . "' AND apellido = '" . $_POST['apellido'] . "'";
$result =  mysqli_query($connection, $query);


$rows = array();

while($rec = mysqli_fetch_assoc($result)) {
    $rows[] = $rec;
}

if(count($rows) == 0) {
    echo "no existe la persona";  
} else if(count($rows) == 1) {
    echo "se encontro y elimino a la persona" ;
}

$queryo ="DELETE FROM civiles where nombre = '" . $_POST['nombre'] . "' AND apellido = '" . $_POST['apellido'] . "'";
$resultsy = mysqli_query($connection,$queryo);


?>