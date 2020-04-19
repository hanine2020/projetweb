<?PHP
include_once "../config.php";

class menuC {

	public function ajouterMenu ($menu){
		$sql="insert into menu (idm,nomm,descm) VALUES (:idm,:nomm,:descm)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $idm=$menu->getIdm();
        $nomm=$menu->getNomm();
        $descm=$menu->getDescm();
 	$req->bindValue(':idm',$idm);
		$req->bindValue(':nomm',$nomm);
		$req->bindValue(':descm',$descm);
            $req->execute();

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

	}


	public function afficherMenu(){
		//$sql="SElECT * From categorie e inner join formationphp.categorie a on e.id_cat= a.id_cat";
		$sql="SElECT * From menu";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	public function supprimerMenu($idm){
		$sql='DELETE FROM menu where menu.idm= :idm';
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idm',$idm);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	public function modifierMenu($idm,$nomm,$descm){

	 //   if($produit->getImage()){$imgimage='".$produit->getImage()."'";}
		$sql="UPDATE menu SET idm=:idm,nomm=:nomm,descm=:descm WHERE idm=:idm";
$db = config::getConnexion();
        $req=$db->prepare($sql);
    try{

			$req->bindValue(':idm',intval($idm));
$req->bindValue(':nomm',$nomm);
$req->bindValue(':descm',$descm);

            $s=$req->execute();

        //   header('Location: afficherCategorie.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
        }

	}
	public function recuperermenu($idm){
		$sql="SELECT * from menu where idm=$idm";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste->fetchAll();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	public function rechercherListemenu($nomm){
		$sql="SELECT * from menu where nomm=$nomm";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}/**/
}

?>
