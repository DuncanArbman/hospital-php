<?php 

	if(isset($_POST["species_description"])){
		// CONNECTIE OPBOUWEN

 		$conn = NEW PDO('mysql:host=localhost;dbname=hospital', "root", "mysql");
 		// QUERY OPBOUWEN

 		$description = $_POST['species_description']; 
 		$query = $conn->prepare("UPDATE `species`  SET `species_description`= :species_description WHERE species_id = :species_id");
 			 

 		// parameters binden
 		$query->bindParam(":species_description", $description);
 		$query->bindParam(":species_id", $description);
 		


 		// execute query (uitvoeren)
		$query->execute();

		// doorsturen naar het overzicht
		header('location: /GitHub_PHP/hospital/index.php');


	}


 ?>