<?php

//objet utilisateur qui concernera principalement l'utilisateur connecté 

class utilisateur
{	
	//attributs

	private $_id_utilisateur ;
	private $_nom_utilisateur ;
	private $_prenom_utilisateur ;
	private $_mail_utilisateur ;
	private $_identifiant_utilisateur ;
	private $_mdp_utilisateur ;
	private $_id_type_utilisateur ;


	// Constructeur
	public function __construct($id, $nom, $prenom, $mail, $identifiant, $mdp, $type)
	{
		$this->_id_utilisateur = $id ;
		$this->_nom_utilisateur = $nom ;
		$this->_prenom_utilisateur = $prenom ;
		$this->_mail_utilisateur = $mail ; 
		$this->_identifiant_utilisateur = $identifiant ;
		$this->_mdp_utilisateur = $mdp ;
		$this->_id_type_utilisateur = $type ;
	}


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
	
	
	public function get_identifiant_utilisateur()
	{
		return $this->_identifiant_utilisateur ;
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


	public function get_id_type_utilisateur()
	{
		return $this->_id_type_utilisateur ;
	}
	
	public function set_id_type_utilisateur($id_type)
	{
		$this->_id_type_utilisateur = $id_type ;
	}
}

?>