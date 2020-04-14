<?php
include('../inc/db.php');
include('../inc/function.php');
echo headerForm();
?>

<form action= "<?php echo $_SERVER['PHP_SELF'];?>" name="form1" method="POST">
<fieldset>
<legend>Choisir le modèle</legend>
<table>
	<tr>
		<td>
		<label for="nom">Libellé (ou une partie): </label>
		<input type="text" name="nom" size="30" maxlength="30"/>
		</td>
		<td></td>
	</tr>
	<tr><td></td><td></td></tr>
	<tr>
		<td>
		<p align='center'><input type="submit" name ="cherchemodele" value="Afficher"/></p>
		</td>
		<td>
		<?php
		include('../action/Rechercher_modele.php')
		?>	
		</td>
	</tr>
</table>
</fieldset>
</form>

<?php
echo footer();
?>