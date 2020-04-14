<?php
    include('../inc/db.php');

    // Faire les requetes
    $requete="SELECT NumImmat, Datecirculation, DateCarteGrise, couleur, modele, NomP FROM Vehicule NATURAL JOIN Proprietaire NATURAL JOIN Modele ORDER by id_Proprietaire;";
    $result=$db->query($requete)->fetchAll();
    $nbmod=count($result);

    echo "<h1> Nombre de véhicules : $nbmod </h1><table border='1'><thead><th>Immat</th> <th>Date de circulation</th> <th>Date de CarteGrise</th> <th>Couleur</th> <th>Modele</th> <th>Propriétaire</th></thead><tbody>";



    // Parcours du tableau $result
    foreach ($result as $value)
        echo"<tr><td>".$value['NumImmat']."</td><td>".$value['Datecirculation']."</td><td>".$value['DateCarteGrise']."</td><td>".$value['couleur']."</td><td>".$value['modele']."</td><td>".$value['NomP']."</td></tr>";


    echo "</tbody></table>";

?>