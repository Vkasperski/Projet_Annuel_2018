<?php
include("connexion_bdd.php");

class type_user_data 
{
	public function get_type_utilisateurs()
	{
		$req = $GLOBALS["bdd"]->prepare("call getTypeUsers()");
		$req->execute(array());
		$types_utilisateur = array();
		$i = 0;
		while ( $datas = $req->fetch())
		{
			$types_utilisateur[$i] = array
			(
				"id_type_utilisateur" => $datas["id_type_utilisateur"],
				"nom_type_utilisateur" => $datas["nom_type_utilisateur"]
			);
			$i++;
		}
		return $types_utilisateur ;
	}

	public function get_type_utilisateurs_by_id($id)
	{
		$req = $GLOBALS["bdd"]->prepare("call getTypeUsersById(?)");
		$req->execute(array($id));
		$data = $req->fetch();
		$types_utilisateur = array
		(
			"id_type_utilisateur" => $datas["id_type_utilisateur"],
				"nom_type_utilisateur" => $datas["nom_type_utilisateur"]
		);
		return $types_utilisateur ;
	}

	public function create_type_utilisateur($nom_type)
	{
		$req  = $GLOBALS["bdd"]->prepare("call createTypeUtilisateur(?)");
		return $req->execute(array($nom));
	}

	public function update_type_utilisateur($id, $nom)
	{
		$req  = $GLOBALS["bdd"]->prepare("call updateTypeUtilisateur(?,?)");
		return $req->execute(array($id,$nom));
	}

	public function delete_type_utilisateur($id)
	{
		$req = $GLOBALS["bdd"]->prepare("call deleteTypeUtilisateur(?)");
		return $req->execute(array($id));
	}
}

?>