<html>

<head>
<link rel="stylesheet" type="text/css" href="lentele.css">
<link rel="stylesheet" type="text/css" href="stil.css">


<?php
  include("connect.php");
 ?>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>
$(document).ready(function(){

  	$("#dal_content").hide();
    $("#mok_content").hide();
	$("#mokPasirinkimo_content").hide();
	$("#pazView").hide();
	$(".HeaderTXT").text("Pažimių knygelė");

  
    $("#mok_button").click(function(){
       $("#mok_content").show();
       $("#dal_content").hide();
	   $("#mokPasirinkimo_content").hide();
	   $("#pazView").hide();

       $(".HeaderTXT").text("Mokinių registras");

    });
  
    $("#dal_button").click(function(){
		 $("#dal_content").show();
         $("#mok_content").hide();
		 $("#mokPasirinkimo_content").hide();
		 $("#pazView").hide();

       	 $(".HeaderTXT").text("Mokomų dalykų registras");

    });
  
  	 $("#paz_button").click(function(){
		 $("#mokPasirinkimo_content").show();
         $("#mok_content").hide();
         $("#dal_content").hide();
		 $("#pazView").hide();
		 
		 $(".HeaderTXT").text("Pažimių registras");


    });
	
	$("#pazView_button").click(function(){
		 $("#pazView").show();
		 $("#mokPasirinkimo_content").hide();
         $("#mok_content").hide();
         $("#dal_content").hide();
         $(".HeaderTXT").text("Mokinio pažymiai");
		 $(".pazView").html("Mokinio pažymiai");

    });
});
</script>
  
</head>
<body>
   <div class="all">
	<div class="heading">
		<h1 class="HeaderTXT">Heading</h1>
		</div>
	<ul class="toolbar">
		<li class="TB"><a id="mok_button">Mokinio registravimas</a></li>
		<li class="TB"><a id="dal_button">Dalyko registravimas</a></li>
        <li class="TB"><a id="paz_button">Pažimių pridėjimas</a></li>
		<li class="TB"><a id="pazView_button">Pažymiai</a></li>
	</ul>

	<div class="content">
       
		<div id="mok_content">

     	 <form action="add_mokinys.php" style="margin-top:20px;margin-left:20px;" method="POST" >
        <input type="text" name="vardas_pavarde" placeholder="Vardas, pavarde">
        <input type="text" name="klase" placeholder="Klasė">
        <input type="text" name="adresas" placeholder="Adresas">
        <input type="text" name="telefono_nr" placeholder="Telefono numeris"> <!-- Veliau padaryti saugiklius -->
        <input type="submit" value="Registruotis">
      </form>

        <?php
				$sql = "SELECT * FROM Mokinys LIMIT 100";
				$result = $conn->query($sql);

				echo '<div class="inContent">';

				echo "<table class='rwd-table'>";



                echo "<tr>";
                echo "<td data-th='Movie Title'> Vardas, pavarde </td>";
                echo "<td class='rwd-table'> Klase </td>";
                echo "<td> Adresas </td>";
                echo "<td> Telefono numeris </td>";
                echo "<td> Redaguoti </td>";
                echo "</tr>";



                while($row = $result->fetch_assoc()) {
                  
                echo "<tr>";
                echo "<td> " .  $row["vardas_pavarde"] . "</td>";
                echo "<td> " . $row["klase"] . "</td>";
                echo "<td> " . $row["adresas"] . "</td>";
                echo "<td> " . $row["telefono_nr"] . "</td>";
                echo "<td><a href=\"mokiniu_edit.php?mok_nr=".$row["mok_nr"]."\" style=\"text-decoration: none\">Edit</a></td>";
                echo "</tr>";

                }


                echo "</table>";
				

			?>
			</div>
	   
        <div id="dal_content">

     	<form action="add_dalykas.php" style="margin-top:20px;margin-left:20px;" method="POST" >
        <input type="text" name="dalyko_pavadinimas" placeholder="Dalyko pavadinimas">
        <input type="text" name="mokytojas" placeholder="Mokytojas">
        <input type="text" name="data" placeholder="Data">
        <input type="submit" value="Registruotis">
        </form>

        <?php
				$sql = "SELECT * FROM Mokymo_dalykas";
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
                echo "<td><a href=\"dalykas_edit.php?dalyko_nr=".$row["dalyko_nr"]."\" style=\"text-decoration: none\">Edit</a></td>";
                echo "</tr>";
				
                echo '</div>';

                }


                echo "</table>";
			?>
			</div>
		
		<div id="mokPasirinkimo_content">
		 <?php
				$sql = "SELECT * FROM Mokinys";
				$result = $conn->query($sql);

				echo '<div class="inContent">';

				echo "<table class='rwd-table'>";



                echo "<tr>";
                echo "<td data-th='Movie Title'> Vardas, pavarde </td>";
                echo "<td class='rwd-table'> Klase </td>";
                echo "<td> Adresas </td>";
                echo "<td> Telefono numeris </td>";
                echo "<td> Redaguoti </td>";
                echo "</tr>";



                while($row = $result->fetch_assoc()) {

                echo "<tr>";
                echo "<td> " .  $row["vardas_pavarde"] . "</td>";
                echo "<td> " . $row["klase"] . "</td>";
                echo "<td> " . $row["adresas"] . "</td>";
                echo "<td> " . $row["telefono_nr"] . "</td>";
                echo "<td><a href=\"add_pazimys_selection.php?mok_nr=".$row["mok_nr"]."\" style=\"text-decoration: none\">Edit</a></td>";
                echo "</tr>";
				
                echo '</div>';
                }


                echo "</table>";
			?>
			</div>
					
		<div id="pazView">
			
		<?php
				$sql = "SELECT * FROM Mokinys";
				$result = $conn->query($sql);

				echo '<div class="inContent">';

				echo "<table class='rwd-table'>";



                echo "<tr>";
                echo "<td data-th='Movie Title'> Vardas, pavarde </td>";
                echo "<td class='rwd-table'> Klase </td>";
                echo "<td> Adresas </td>";
                echo "<td> Telefono numeris </td>";
                echo "<td> Redaguoti </td>";
                echo "</tr>";



                while($row = $result->fetch_assoc()) {

                echo "<tr>";
                echo "<td> " .  $row["vardas_pavarde"] . "</td>";
                echo "<td> " . $row["klase"] . "</td>";
                echo "<td> " . $row["adresas"] . "</td>";
                echo "<td> " . $row["telefono_nr"] . "</td>";
                echo "<td><a href=\"paz_view.php?mok_nr=".$row["mok_nr"]."\" style=\"text-decoration: none\">Edit</a></td>";
                echo "</tr>";
				
                echo '</div>';
                }


                echo "</table>";
			?>
			</div>
					
	</div>
	</div>

			

</body>



</html>