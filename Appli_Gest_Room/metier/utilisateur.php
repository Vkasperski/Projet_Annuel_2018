<?php

//objet utilisateur qui concernera principalement l'utilisateur connecté 

class utilisateur
{	
	//attributs

	private $_id_utilisateur ;
	private $_nom_utilisateur ;
	private $_prenom_utilisateur ;
	private $_mail_utilisateur ;
	private $_mdp_utilisateur ;
	private $_est_admin ;
	private $_est_pdg ;
	private $_est_bloque ;


	// Constructeur
	public function __construct($id, $nom, $prenom, $mail, $mdp, $admin, $pdg, $bloque)
	{
		$this->_id_utilisateur = $id ;
		$this->_nom_utilisateur = $nom ;
		$this->_prenom_utilisateur = $prenom ;
		$this->_mail_utilisateur = $mail ; 
		$this->_mdp_utilisateur = $mdp ;
		$this->_est_admin = $admin ;
		$this->_est_pdg = $pdg ;
		$this->_est_bloque = $bloque;
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
	
	public function get_mdp_utilisateur()
	{
		return $this->_mdp_utilisateur ;
	}
	
	public function set_mdp_utilisateur($mdp_user)
	{
		$this->_mdp_utilisateur = $mdp_user ;
	}

	public function get_est_admin()
	{
		return $this->_est_admin ;
	}

	public function set_est_admin($admin)
	{
		$this->_est_admin = $admin ;
	}

	public function get_est_pdg()
	{
		return $this->_est_pdg ;
	}

	public function set_est_pdg($pdg)
	{
		$this->_est_pdg = $pdg ;
	}

	public function get_est_bloque()
	{
		return $this->_est_bloque ;
	}

	public function set_est_bloque($bloque)
	{
		$this->_est_bloque = $bloque ;
	}
}

?>