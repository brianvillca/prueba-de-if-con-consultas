<?php
include "./connection.php";

$query = "SELECT * FROM civiles";
$result = mysqli_query($connection, $query);

$rows = array();
$counter = 0;

while($rec = mysqli_fetch_assoc($result)) {
    if ($counter % 2 == 0 && count($rows) < 5) { 
        $rows[] = $rec;
    }
    $counter++;
}

echo json_encode($rows);

?>
