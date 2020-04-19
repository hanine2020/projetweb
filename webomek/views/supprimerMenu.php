<?PHP
include "../core/menuC.php";
$menuC=new MenuC();
if (isset($_POST["idm"])){
	$menuC->supprimerMenu($_POST["idm"]);
	header('Location: afficherMenu.php');
}

?>