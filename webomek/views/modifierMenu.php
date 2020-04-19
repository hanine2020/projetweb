<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/menu.php";
include "../core/menuC.php";
if (isset($_GET['idm'])){
	$menuC=new MenuC();
    $result=$menuC->recupererMenu($_GET['idm']);
	foreach($result as $row){
		$idm=$row['idm'];
		$nomm=$row['nomm'];
		$descm=$row['descm'];
?>
<form method="POST">
<table>
<caption>Modifier Menu</caption>
<tr>
<td>Idm</td>
<td><input type="number" name="idm" value="<?PHP echo $idm ?>"></td>
</tr>
<tr>
<td>Nomm</td>
<td><input type="text" name="nomm" value="<?PHP echo $nomm ?>"></td>
</tr>
<tr>
<td>Descm</td>
<td><input type="text" name="descm" value="<?PHP echo $descm ?>"></td>
</tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="idm_ini" value="<?PHP echo $_GET['idm'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$menu=new menu($_POST['idm'],$_POST['nomm'],$_POST['descm']);
	$menuC->modifierMenu($menu,$_POST['idm_ini']);
	echo $_POST['idm_ini'];
	header('Location: afficherMenu.php');
}
?>
</body>
</HTMl>