<br/>

<h2> Ajout d'une porte ouverte </h2>

<form method ="post" action ="">
	<table>
		<tr>
			<td> Désignation: </td><td><input type="text" name="designation"></td>
		</tr>
		<tr>
			<td> Date de l'événement: </td><td><input type="date" name="dateporte"></td>
		</tr>
		<tr>
			<td> Heure de début: </td><td><input type="time" name="heuredebut"></td>
		</tr>
		<tr>
			<td> heure de fin: </td><td><input type="time" name="heurefin"></td>
		</tr>
		<tr>
			<td> Lieu: </td><td><input type="text" name="lieu"></td>
		</tr>
		<tr>
			<td>
				<input type="reset" name="Annuler" value="Annuler">
			</td>
			<td>
				<input type="submit" name="Valider" value="Valider">
			</td>
		</tr>
		
	</table>
	
</form>

<h2> Liste des portes ouvertes </h2>

<table border="1">
	<tr>
		<td> ID de la porte </td><td> Désignation </td><td> Date de l'événement </td><td> heure de début </td><td> Heure de fin </td><td> Lieu </td>
	</tr>
<?php
	$resultats = Modele::selectAllPortes();
	foreach ($resultats as $unePorte)
	{
	echo "<tr>
				<td>".$unePorte["idporte"]."</td>
				<td>".$unePorte["designation"]."</td>
				<td>".$unePorte["dateporte"]."</td>
				<td>".$unePorte["heuredebut"]."</td>
				<td>".$unePorte["heurefin"]."</td>
				<td>".$unePorte["lieu"]."</td>
		</tr>";
	}
?>
</table>
