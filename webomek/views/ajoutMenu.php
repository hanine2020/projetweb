<?PHP
include "../entities/menu.php";
include "../core/menuC.php";

if (isset($_POST['idm']) and isset($_POST['nomm']) and isset($_POST['descm'])){
$menu1=new menu($_POST['idm'],$_POST['nomm'],$_POST['descm']);
//Partie2

var_dump($menu1);


//Partie3
$menu1C=new MenuC();
$menu1C->ajouterMenu($menu1);
header('Location: afficherMenu.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>