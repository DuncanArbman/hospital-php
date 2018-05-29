<?php
	$conn = NEW PDO('mysql:host=localhost;dbname=hospital', "root", "mysql");

	$query = $conn->prepare("SELECT * FROM `species` WHERE `species_id` =
		:species_id");

	$query->bindParam(":species_id", $_GET["species_id"]);
		

	$query->execute();

	// ARRAY FETCHEN
	$species = $query->fetch();



		
 
	








?>

<form action="updatespecies.php" method="POST">
	<input type ="hidden" name = "species_id" value=$species=["species_id"]>
	<p>Naam <input type="text" value="<?=$species["species_description"]?>"></p>
	<button>Opslaan</button>
</from>