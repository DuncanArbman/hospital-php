<?php 

	if(isset($_POST["species_description"])){
		// CONNECTIE OPBOUWEN

 		$conn = NEW PDO('mysql:host=localhost;dbname=hospital', "root", "mysql");
 		// QUERY OPBOUWEN

 		$description = $_POST['species_description']; 
 		$query = $conn->prepare("INSERT INTO `species` (`species_description`) VALUES (:species_description)");
 			 

 		// parameters binden
 		$query->bindParam(":species_description", $description);

 		// execute query (uitvoeren)
		$query->execute();

		// doorsturen naar het overzicht
		header('location: /GitHub_PHP/hospital/index.php');


	}


 ?>