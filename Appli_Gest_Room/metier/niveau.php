<?php


//idique le niveau d'une reservation 


class niveau
{
	private $_id_niveau ;
	private $_libelle_niveau ;
}


// assesseurs


public function get_id_niveau()
{
	return $this->_id_niveau ;
}


public function get_libelle_niveau()
{
	return $this->_libelle_niveau ;
}


public function set_libelle_niveau($libelle_niveau)
{
	$this->_libelle_niveau = $libelle_niveau ;
}


?>