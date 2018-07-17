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
		$typeArray = $typeData->get_type_utilisateurs_by_id($id);
		$type = new type_user 
		(
			$typeArray["id_type_utilisateur"],
			$typeArray["nom_type_utilisateur"]
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


$tu = new type_user_metier();
foreach ($tu->get_type_utilisateurs() as $aTu ) 
{
	echo($aTu->get_id_type_user()." | ".$aTu->get_libelle_type_user());
	?></br><?php
}


?></br></br>
après Création</br>
<?php
$id_typeUser_creat = 0 ;
$tu->create_type_utilisateur("yolo");
foreach ($tu->get_type_utilisateurs() as $aTu ) 
{
	echo($aTu->get_id_type_user()." | ".$aTu->get_libelle_type_user());
	$id_typeUser_creat = $aTu->get_id_type_user();
	?></br><?php
}


?></br></br>
après Modification</br> 
<?php
$tu->update_type_utilisateur($id_typeUser_creat,"mdrrr");

echo($tu->get_type_utilisateurs_by_id($id_typeUser_creat)->get_id_type_user()." | ".$tu->get_type_utilisateurs_by_id($id_typeUser_creat)->get_libelle_type_user());
?></br></br></br>
après Suppression </br>
<?php

$tu->delete_type_utilisateur($id_typeUser_creat);
foreach ($tu->get_type_utilisateurs() as $aTu ) 
{
	echo($aTu->get_id_type_user()." | ".$aTu->get_libelle_type_user());
	$id_typeUser_creat = $aTu->get_id_type_user();
	?></br><?php
}


?>