<?php
    include('../inc/db.php');
    

   $id = $_POST['IdModel'];
   $lib = $_POST['Libelle'];
   $carburant = $_POST['carburant'];

   $requete = 'INSERT INTO 'modele' ('id_model','model','carburant')
   VALUES ("'.$id.'","'.$lib.'","'.$carburant.'");';

    $result = mysql_query($requete);

    
    
        

?>