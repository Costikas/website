</html>

<html>

<head>
<link rel="stylesheet" type="text/css" href="lentele.css">
<link rel="stylesheet" type="text/css" href="stil.css">

<?php
  include("connect.php");

  $id_dal= $_GET['dal_nr'];
  $id_mok= $_GET['mok_nr'];
  
  $conn->close();

?>

</head>


<body>

<div class="all">

<div class="heading">
		<h1>Pažymys</h1>
</div>

<ul class="toolbar">
  <li class="TB"><a href="http://jkm.elinara.lt/~PG4214NL/">Atgal</a></li>
</ul>

<div class="content">
	
	 <form action="adding_paz.php" style="margin: 0 auto;width:250px;margin-top: 100px;" method="POST" >
    <input type="hidden" name="id_dalyko" value="<?php echo $id_dal; ?>">
    <input type="hidden" name="id_mokinio" value="<?php echo $id_mok; ?>">
	<input type="text" name="paz" placeholder="Pažymys">
    <input type="submit" value="Registruotis">
</form>
	

</div>
</div>

</body>

</html>
