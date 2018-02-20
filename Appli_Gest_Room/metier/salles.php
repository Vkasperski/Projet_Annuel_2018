<?php


// salle


class salle
{
	private $_id_salle ;
	private $_nom_salle ;
	private $_disponibilite_salle ;
}


// assesseurs


public function get_id_salle()
{
	return $this->_id_salle ;
}

public function get_nom_salle()
{
	return $this->_nom_salle ;
}

public function set_nom_salle($nom_salle)
{
	$this->_nom_salle =  $nom_salle ;
}

public function get_disponibilite_salle()
{
	return $this->_disponibilite_salle ;
}

public function set_disponibilite_salle($disponibilite_salle)
{
	$this->_disponibilite_salle = $disponibilite_salle ;
}
?>