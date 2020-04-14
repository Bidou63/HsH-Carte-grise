<?php
include('../inc/db.php');
include('../inc/function.php');
echo headerForm();
?>
<h1>Ajout d'un Proprietaire</h1>
<form action="" method="POST">
	<fieldset id="AddProprio">
		<legend>Ajout de proprietaire</legend>

		<div>
			<div class="block">
				<label>Nom :</label>
				<input type="text" name="Nom">
			</div>
			<div class="block">
				<label>Prenom :</label>
				<input type="text" name="Prenom">
			</div>
		</div>
		<div>
			<div class="block">
				<label>Adresse :</label>
				<input type="text" name="Adresse">
			</div>
			<div class="block">
				<label>Ville :</label>
				<input type="text" name="Ville">
			</div>
		</div>
			<label>Code Postal :</label>
			<input type="text" name="CodePostal">
		
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
include('../action/Ajout_proprietaire.php');
echo footer();
?>