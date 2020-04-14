<?php
	include('../inc/db.php');
	
	// Exécuter la requête
	$requete="SELECT * FROM Proprietaire ORDER BY NomP";
	$result=$db->query($requete)->fetchAll();
	$nbmod=count($result);

	echo "<h1> Nombre de Propriétaires : $nbmod</h1><table border='1'><thead><th>Id du Propriétaire</th> <th>Nom</th> <th>Prénom</th> <th>Adresse</th> <th>Ville</th> <th>Code Postal</th></thead><tbody>";

	// Parcours du tableau $result
	foreach ($result as $value)
		echo"<tr><td>".$value['id_Proprietaire']."</td><td>".$value['NomP']."</td><td>".$value['PrenomP']."</td><td>".$value['AdresseP']."</td><td>".$value['VilleP']."</td><td>".$value['CodePostal']."</td></tr>";
	
	echo "</tbody></table>";
?>