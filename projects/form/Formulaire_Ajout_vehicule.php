<?php
include('../inc/db.php');
include('../inc/function.php');
echo headerForm();
?>	
<h1>Ajout d'un vehicule</h1>	

<form action= "<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

<!-- PROPRIETAIRE -->
<fieldset>
<legend>Propriétaire</legend>
<table>
	<tr>
		<td>
		<label for="nom">Saisir un nom (ou une partie): </label>
		<input type="text" name="nom" size="30" maxlength="30"/>
		</td>
		<td></td>
	</tr>
	<tr><td></td><td></td></tr>
	<tr>
		<td>
		<p align='center'><input type="submit" name ="chercheprop" value="Afficher"/></p>
		</td>
		<td>
		<?php
		include('../action/Requete_Proprietaire.php')
		?>
		</td>
	</tr>
</table>
</fieldset>

<br>

<!-- VOITURE -->
<fieldset>
<legend>Voiture</legend>
<table>
	<tr>
		<td>
		<?php
		include('../action/Requete_Modele.php');
		?>
		</td>
		<td>
		</td>
	</tr>
	<tr>
		<td>
		<label for="immat">Numéro d'immatriculation :</label>
		<input type="text" name="immat" size="9" maxlength="9"/>
		</td>
		<td>
		<label for="couleur">Couleur :</label>
		<select name="couleur">
			<option value="claire">Claire</option>
			<option value="moyenne">Moyenne</option>
			<option value="foncee">Foncée</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>
		<label for="datevoiture">Date 1ere immatriculation (AAAA-MM-JJ) :</label>
		<input type="text" name="datevoiture" size="10" maxlength="10"/>
		</td>
		<td>
		<label for="datecarte">Date carte grise (AAAA-MM-JJ) :</label>
		<input type="text" name="datecarte" size="10" maxlength="10" />
		</td>
	</tr>
</table>
</fieldset>

<br>

<input type="reset" value="Effacer ">
<input type="submit" value="Envoyer ">

</form>

<?php
include('../action/Ajout_vehicule.php');
echo footer();
?>