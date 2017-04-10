<html>

<head>

</head>

<?php

  include("connect.php");

  $id = $_GET['mok_nr'];

  echo "$id";
?>

<body>
  <form action="mokiniu_edit_2.php" style="margin-top:20px;margin-left:20px;" method="POST" >
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="text" name="vardas_pavarde" placeholder='Vardas, pavarde'>
    <input type="text" name="klase" placeholder='Klase'>
    <input type="text" name="adresas" placeholder='Adresas'>
    <input type="text" name="telefono_nr" placeholder='Telefono numeris'> <!-- Veliau padaryti saugiklius -->
    <input type="submit" value="Registruotis">
</form>

</body>

</html>
