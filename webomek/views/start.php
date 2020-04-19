<?PHP
include "../entities/menu.php";
include "../core/menuC.php";
$menu=new Menu(2020,'makrouna','omek houria sannefa');
$menuC=new menuC();
$menuC->afficherMenu($menu);
echo "****************";
echo "<br>";
echo "idm:".$menu->getIdm();
echo "<br>";
echo "nomm:".$menu->getNomm();
echo "<br>";
echo "descm:".$menu->getDescm();
echo "<br>";


?>