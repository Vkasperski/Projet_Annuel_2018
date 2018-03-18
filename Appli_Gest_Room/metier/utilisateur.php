<?php

//objet utilisateur qui concernera principalement l'utilisateur connecté 

class utilisateur
{
	private $_id_utilisateur ;
	private $_nom_utilisateur ;
	private $_prenom_utilisateur ;
	private $_mail_utilisateur ;
	private $_identifiant_utilisateur ;
	private $_mdp_utilisateur ;



 // assesseurs


	public function get_id_utilisateur()
	{
		return $this->_id_utilisateur ;
	}
	
	
	public function get_nom_utilisateur()
	{
		return $this->_nom_utilisateur ;
	}
	
	public function set_nom_utilisateur($nom_user)
	{
		$this->_nom_utilisateur = $nom_user;
	}
	
	
	public function get_prenom_utilisateur()
	{
		return $this->_prenom_utilisateur ;
	}
	
	public function set_prenom_utilisateur($prenom_user)
	{
		$this->_prenom_utilisateur = $prenom_user;
	}
	
	
	public function get_mail_utilisateur()
	{
		return $this->_mail_utilisateur ;
	}
	
	public function set_mail_utilisateur($mail_user)
	{
		$this->_mail_utilisateur = $mail_user ;
	}
	
	
	public function get_ididentifiant_utilisateur()
	{
		return $this->_id_utilisateur ;
	}
	
	public function set_ididentifiant_utilisateur($ididentifiant_user)
	{
		$this->_ididentifiant_utilisateur = $ididentifiant_user ;
	}
	
	
	public function get_mdp_utilisateur()
	{
		return $this->_mdp_utilisateur ;
	}
	
	public function set_mdp_utilisateur($mdp_user)
	{
		$this->_mdp_utilisateur = $mdp_user ;
	}
}

?>