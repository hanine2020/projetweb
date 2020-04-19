<?PHP
include "../core/menuC.php";
$menu1C=new MenuC();
$listeMenus=$menu1C->afficherMenus();

//var_dump($listeMenus->fetchAll());
?>
<table border="1">
<tr>
<td>Idm</td>
<td>Nomm</td>
<td>Descm</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeMenus as $row){
	?>
	<tr>
	<td><?PHP echo $row['idm']; ?></td>
	<td><?PHP echo $row['nomm']; ?></td>
	<td><?PHP echo $row['descm']; ?></td>
	<td><form method="POST" action="supprimerMenu.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['idm']; ?>" name="idm">
	</form>
	</td>
	<td><a href="modifierMenu.php?idm=<?PHP echo $row['idm']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


