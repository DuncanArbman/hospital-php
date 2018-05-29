<?php
	$conn = NEW PDO('mysql:host=localhost;dbname=hospital', "root", "mysql");

	$query = $conn->prepare("DELETE FROM `species` WHERE `species_id` =
		:species_id");

		$query->bindParam(":species_id", $_GET["species_id"]);
		

		$query->execute();
		
 
		header ('location: /GitHub_PHP/hospital/index.php');
	



?>
