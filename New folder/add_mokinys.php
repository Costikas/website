<?php
  include("connect.php");

  $vardas_pavarde = $_POST['vardas_pavarde'];
  $klase = $_POST['klase'];
  $adresas = $_POST['adresas'];
  $telefono_nr = $_POST['telefono_nr'];

  $sql = "INSERT INTO Mokinys (vardas_pavarde, klase, adresas,  telefono_nr) VALUES ('$vardas_pavarde', '$klase', '$adresas', '$telefono_nr');";
  if ($conn->multi_query($sql) === TRUE) {
   echo "New records created successfully";
  } else {
   echo "Error: " . $sql . "<br>" . $conn->error;
  }

  header("Location: http://jkm.elinara.lt/~PG4214NL/");
  ?>
