<?php

include("connect.php");

$id = $_POST['id'];

echo "$id";

$pavadinimas = $_POST['pavadinimas'];
$mokytojas = $_POST['mokytojas'];
$data = $_POST['data'];

echo "---|";
echo "$vardas_pavarde";
echo "|---";

$sql = "UPDATE Mokymo_dalykas SET pavadinimas='$pavadinimas',mokytojas='$mokytojas',data='$data'WHERE dalyko_nr=$id";
if ($conn->query($sql) === TRUE) {
 echo "Record updated successfully";
} else {
 echo "Error updating record: " . $conn->error;
}

$conn->close();

header("Location: http://jkm.elinara.lt/~PG4214NL/");


?>
