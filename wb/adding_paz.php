<?php
  include("connect.php");

  $id_m = $_POST['id_dalyko'];
  $id_d = $_POST['id_mokinio'];
  $paz = $_POST['paz'];
  $data = date("Y-m-d");
    
  $sql = "INSERT INTO Pazimiu_registras (mok_nr, dalyko_nr,  pazymys, data) VALUES ('$id_m', '$id_d', '$paz', '$data');";
  if ($conn->multi_query($sql) === TRUE) {
   echo "New records created successfully";
  } else {
   echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();

  header("Location: http://jkm.elinara.lt/~PG4214NL/");
	
  ?>
