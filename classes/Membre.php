<?php 

class Membre
{
 	private $pseudo;
 	private $mdp;


 	function __construct(string $pseudo,string $mdp)
 	{
 		$this->pseudo=$pseudo;
 		$this->mdp=$mdp;
 	}

 	function __toString(){
 		return $this->pseudo;
 	}

    function getPseudo(){
        return $this->pseudo;
    }

    function getMdp(){
        return $this->mdp;
    }

    function setPseudo(string $pseudo){
        $this->pseudo=$pseudo;
    }

    function setMdp(string $mdp){
        $this->mdp=$mdp;
    }
 } 


?>