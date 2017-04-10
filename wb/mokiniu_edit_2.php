<?php

include("connect.php");

$id = $_POST['id'];

echo "$id";

$vardas_pavarde = $_POST['vardas_pavarde'];
$klase = $_POST['klase'];
$adresas = $_POST['adresas'];
$telefono_nr = $_POST['telefono_nr'];

echo "---|";
echo "$vardas_pavarde";
echo "|---";

$sql = "UPDATE Mokinys SET vardas_pavarde='$vardas_pavarde',klase='$klase',adresas='$adresas',telefono_nr='$telefono_nr' WHERE mok_nr=$id";
if ($conn->query($sql) === TRUE) {
 echo "Record updated successfully";
} else {
 echo "Error updating record: " . $conn->error;
}
$conn->close();

header("Location: http://jkm.elinara.lt/~PG4214NL/");
?>
