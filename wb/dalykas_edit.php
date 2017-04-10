<html>

<head>

</head>

<?php

  include("connect.php");

  $id = $_GET['dalyko_nr'];

	$conn->close();
  
?>

<body>
  <form action="dalykas_edit_2.php" style="margin-top:20px;margin-left:20px;" method="POST" >
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="text" name="pavadinimas" placeholder='Dalyko pavadinimas'>
    <input type="text" name="mokytojas" placeholder='Dėstantis mokytojas'>
    <input type="text" name="data" placeholder='Data'>
    <input type="submit" value="Registruotis">
</form>

</body>

</html>
