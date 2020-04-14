<?php
include('../inc/db.php');
include('../inc/function.php');
echo headerForm();
?>
<h1>Ajout d'un Modele</h1>
<form action="../action/Ajout_modele.php" method="POST">
	<fieldset id="Caracteristiques">
		<legend>Caract&eacute;ristiques</legend>
		<label>Id du Modele :</label>
		<input type="text" name="IdModel" size=3>
		<label>Libelle :</label>
		<input type="text" name="Libelle">
		<label>Carburant :</label>
		<select name="carburant">
			<option value="essence">Essence</option>
			<option value="diesel">Diesel</option>
			<option value="gpl">GPL</option>
			<option value="electrique">Electrique</option>
		</select>
	</fieldset>
		<div class="InsertBouton">
			<div>
				<input type="reset" name="effacer">
			</div>
			<div>
				<input type="submit" name="Envoyer" value="Envoyer">
			</div>
		</div>
</form>
<?php
include('../action/Ajout_modele.php');
echo footer();
?>