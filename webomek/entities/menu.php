<?PHP
class Menu{
	private $idm;
	private $nomm;
	private $descm;
	
	function __construct($idm,$nomm,$descm){
		$this->idm=$idm;
		$this->nomm=$nomm;
		$this->descm=$descm;
		
	}
	
	function getIdm(){
		return $this->idm;
	}
	function getNomm(){
		return $this->nomm;
	}
	function getDescm(){
		return $this->descmm;
	}

	function setNomm($nomm){
		$this->nomm=$nomm;
	}
	function setDescm($descm){
		$this->descm=$descm;
	}
	
}

?>