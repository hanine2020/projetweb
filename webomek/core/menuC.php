<?PHP
include "../config.php";
class MenuC {
function afficherMenu ($menu){
		echo "idm: ".$menu->getIdm()."<br>";
		echo "nomm: ".$menu->getNomm()."<br>";
		echo "descm: ".$menu->getDescm()."<br>";
		
	}
	/*function calculerSalaire($employe){
		echo $employe->getNbHeures() * $employe->getTarifHoraire();
	}*/
	function ajouterMenu($menu){
		$sql="insert into menu (idm,nomm,descm) values (:idm, :nomm,:descm)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
       /* $idm=$menu-> getIdm();
        $nomm=$menu->getNomm();
        $descm=$menu->getDescm();*/
		
		$req->bindvalue(':idm',123,951);
			$req->bindvalue(':nomm',"slata","makrouna");
			$req->bindvalue(':descm',"savourer le gout","le meilleur gout");
		

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherMenus(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
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
	function supprimerMenu($idm){
		$sql="DELETE FROM menu where idm= :idm";
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
	function modifierMenu($menu,$idm){
		$sql="UPDATE menu SET idm=:idmm, nomm=:nomm,descm=:descm WHERE idm=:idm";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idmm=$menu->getIdm();
        $nomm=$menu->getNomm();
        $descm=$menu->getDescm();
		$datas = array(':idmm'=>$idmm, ':idm'=>$idm, ':nomm'=>$nomm,':descm'=>$descm);
		$req->bindValue(':idmm',$idmm);
		$req->bindValue(':idm',$idm);
		$req->bindValue(':nomm',$nomm);
		$req->bindValue(':descm',$descm);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererMenu($idm){
		$sql="SELECT * from menu where idm=$idm";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeEmployes($nommm){
		$sql="SELECT * from menu where nomm=$nommm";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>