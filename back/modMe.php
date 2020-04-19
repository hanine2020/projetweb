<?php
include "../../core/menuC.php";
include "../../entities/menu.php";
$menuC=new menuC();

//if (!isset($_GET['modifier'])){

    $menu=new menu($_POST['idm'],$_POST['nomm'],$_POST['descm']);
    $menuC=new menuC();
    $menuC->modifierMenu($_POST['idm'],$_POST['nomm'],$_POST['descm']);

    header('Location: afficherMenu.php');


?>
