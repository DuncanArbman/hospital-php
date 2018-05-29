<?php
	// LOGIC FISRT!!

	// CONNECTIE OPBOUWEN
 $conn = NEW PDO('mysql:host=localhost;dbname=hospital', "root", "mysql");
	// QUERY OPBOUWEN
 	$query = $conn->prepare ("SELECT * FROM `species`");

	// EXECUTE QUERY
 	$query->execute();

	// ARRAY FETCHEN
	$species = $query->fetchAll();

 ?>	
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Hospital</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<h1>Hospital</h1>
	<ul>
		<li><a href="patients.html">Patiënts</a></li>
		<li><a href="clients.html">Clients</a></li>
		<li><a href="species.html">Species</a></li>
	</ul>

	<h2>Species</h2>
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>Description</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
			<?php
			$count = 0;
			foreach($species as $specie){
				$count++;
			?>

			<tr>
				<td><?= $count ?></td>
				<td><?=$specie["species_description"]?></td>
				<td class="center"><a href="editspecies.php?species_id=<?=$specie["species_id"]?>">edit</a></td>
				<td class="center"><a href="deletespecies.php?species_id=<?=$specie["species_id"]?>">delete</a></td>
			</tr>
			<?php
			}
			?>
		</tbody>
	</table>
		<p><a href="newspecie.php">Create</a></p>
		<p><a href="index.html">Home</a></p>
	</body>
</html>