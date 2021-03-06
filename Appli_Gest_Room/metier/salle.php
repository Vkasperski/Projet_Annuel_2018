<?php


// salle


class salle
{
	private $_id_salle ;
	private $_nom_salle ;
	private $_disponibilite_salle ;
	private $_descriptif_salle ;


	// Constructeur
	public function __construct($id, $nom, $disponibilite, $descriptif)
	{
		$this->_id_salle = $id ;
		$this->_nom_salle = $nom ;
		$this->_disponibilite_salle = $disponibilite ;
		$this->_descriptif_salle = $descriptif ;
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

	public function get_descriptif_salle()
	{
		return $this->_descriptif_salle ;
	}
	
	public function set_descriptif_salle($descriptif_salle)
	{
		$this->_descriptif_salle = $descriptif_salle ;
	}


}
?>