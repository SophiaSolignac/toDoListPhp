<?php 

class MembreGateway{

	private $con;

	function __construct(Connection $con){
		$this->con=$con;
	}



	public function newwMember(Membre $user){
		$pseudo=$user->getPseudo();
		$mdp=password_hash($user->getMdp(), PASSWORD_DEFAULT);
		$query='INSERT into Membre value(NULL,:name,:mdp)';

		try{
			$this->con->executeQuery($query,array(
				':name' => array($pseudo,PDO::PARAM_STR), 
				':mdp' => array($mdp,PDO::PARAM_STR)));
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function selectAll(){
		$query='SELECT * from Membre';

		try{
			$this->con->executeQuery($query,array());
			

			$results = $this->con->getResults();

			foreach ($results as $row)
				$Membres[] = new Member($row['pseudo'],$row['mdp']);
			return $Membres;

		}catch(PDOexception $e){
			echo $e->getMessage();
		}

	}
}

?>