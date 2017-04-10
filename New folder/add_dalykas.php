<?php
  include("connect.php");

  $_pavadinimas = $_POST['dalyko_pavadinimas'];
  $_mokytojas = $_POST['mokytojas'];
  $_data = $_POST['data'];

  $sql = "INSERT INTO Mokymo_dalykas (pavadinimas, mokytojas, data) VALUES ('$_pavadinimas', '$_mokytojas', '$_data');";
  if ($conn->multi_query($sql) === TRUE) {
   echo "New records created successfully";
  } else {
   echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

  header("Location: http://jkm.elinara.lt/~PG4214NL/");
  ?>
