<?php
include("type_user.php");
include("donnees/type_user.data.php");

class type_user_metier
{

	public function get_type_utilisateurs()
	{
		$typeData = new type_utilisateur_data();
		$i = 0;
		foreach ($typeData->get_type_utilisateurs() as $unType) 
		{
			$tab_type[$i] = new type_user
			(
				$unType["id_type_utilisateur"],
				$unType["nom_type_utilisateur"]
			);
			$i++;
		}
		return $tab_type ;
	}

	public function get_type_utilisateurs_by_id($id)
	{
		$typeData = new type_utilisateur_data();
		$typeArray = $typeData->get_type_utilisateurs($id);
		$type = new type_user 
		(
			$type["id_type_utilisateur"],
			$type["nom_type_utilisateur"]
		);
		return $type; 
	}

	public function create_type_utilisateur($nom_type)
	{
		$typeData = new type_utilisateur_data();
		return $typeData->create_type_utilisateur($nom_type);
	}

	public function update_type_utilisateur($id, $nom_type)
	{
		$typeData = new type_utilisateur_data();
		return $typeData->update_type_utilisateur($id, $nom_type);
	}

	public function delete_type_utilisateur($id)
	{
		$typeData = new type_utilisateur_data();
		return $typeData->delete_type_utilisateur($id);
	}
}






?>