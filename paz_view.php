<html>

<head>
<link rel="stylesheet" type="text/css" href="lentele.css">
<link rel="stylesheet" type="text/css" href="stil.css">
</head>


<body>

<div class="all">

<div class="heading">
		<h1>Pažymiai</h1>
</div>

<ul class="toolbar">
  <li class="TB"><a href="http://jkm.elinara.lt/~PG4214NL/">Atgal</a></li>
</ul>

<div class="content">

<?php
  include("connect.php");

  $m_nr = $_GET['mok_nr'];
    
  $sql = "SELECT * FROM Mokymo_dalykas WHERE mok_nr='$m_nr'";
		$result = $conn->query($sql);

		echo '<div class="inContent">';

		echo "<table class='rwd-table'>";

		echo "<tr>";
		echo "<td data-th='Movie Title'> Dalyko pavadinimas </td>";
		echo "<td class='rwd-table'> Dėstantis mokytojas </td>";
		echo "<td> Data </td>";
		echo "</tr>";

		while($row = $result->fetch_assoc()) {
		  		  
		echo "<tr>";
		echo "<td> " . $row["pavadinimas"] . "</td>";
		echo "<td> " . $row["mokytojas"] . "</td>";
		echo "<td> " . $row["data"] . "</td>";
		echo "</tr>";
		
		echo '</div>';

		}


		echo "</table>";
		
		$conn->close();

?>

</div>
</div>

</body>

</html>