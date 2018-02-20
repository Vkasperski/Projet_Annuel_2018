<?php


// reservation 


class reservation 
{

	private $_id_utilisateur ;
	private $_id_salle ;
	private $_id_niveau ;
	private $_debut_reservation ;
	private $_fin_reservation ;

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


	public function get_id_niveau()
	{
		return $this->_id_niveau ;
	}

	public function set_id_niveau($id_niveau)
	{
		$this->_id_niveau = $id_niveau ;
	}


	public function get_debut_reservation()
	{
		return $this->_id_debut_reservation ;
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

?>