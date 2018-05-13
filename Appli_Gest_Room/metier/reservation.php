<?php


// reservation 


class reservation 
{

	private $_id_utilisateur ;
	private $_id_salle ;
	private $_debut_reservation ;
	private $_fin_reservation ;
	private $_est_facultatif ;
	private $_description ;


	//Constructeur
	public function __construct( $id_user, $id_salle, $debut_reservation, $fin_reservation, $facultatif, $description )
	{
		$this->_id_utilisateur = $id_user ;
		$this->_id_salle = $id_salle ;
		$this->_est_facultatif = $facultatif ;
		$this->_debut_reservation = $debut_reservation ;
		$this->_fin_reservation = $fin_reservation ;
		$this->_description = $description ;
	}


// assesseurs


	public function get_id_utilisateur()
	{
		return $this->_id_utilisateur ;
	}
	
	public function set_id_utilisateur($id_user)
	{
		$this->_id_utilisateur = $id_user;
	}
	
	
	public function get_id_salle()
	{
		return $this->_id_salle ;
	}
	
	public function set_id_salle($id_salle)
	{
		$this->_id_salle = $id_salle;
	}


	public function get_est_facultatif()
	{
		return $this->_est_facultatif ;
	}

	public function set_est_facultatif($facultatif)
	{
		$this->_est_facultatif = $facultatif ;
	}


	public function get_debut_reservation()
	{
		return $this->_debut_reservation ;
	}

	public function set_debut_reservation($debut_reservation)
	{
		$this->_debut_reservation = $debut_reservation ;
	}


	public function get_fin_reservation()
	{
		return $this->_fin_reservation ;
	}

	public function set_fin_reservation($fin_reservation)
	{
		$this->_fin_reservation = $fin_reservation ;
	}

	public function get_description()
	{
		return $this->_description ;
	}

	public function set_description($description)
	{
		$this->_description = $description ;
	}

}

?>