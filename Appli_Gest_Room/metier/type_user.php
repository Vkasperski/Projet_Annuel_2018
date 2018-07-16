<?php

class type_user
{
	private $_id_type_user ;
	private $_libelle_type_user ;
}


// assesseurs


public function get_id_type_user()
{
	return $this->_id_type_user ;
}


public function get_libelle_type_user()
{
	return $this->_libelle_type_user ;
}


public function set_libelle_type_user($libelle_type_user)
{
	$this->_libelle_type_user = $libelle_type_user ;
}


?>