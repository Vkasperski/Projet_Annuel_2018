<?php
include("connexion_bdd.php");

class utilisateurData {

	public function get_utilisateurs()
	{
		$req = $GLOBALS["bdd"]->prepare("call getUsers();");
		$req->execute(array());
		$users = array();
		$i = 0;
		while ( $datas = $req->fetch() )
		{
			$users[$i] = array
			(
				"id_utilisateur" => $datas["id_utilisateur"],
				"nom_utilisateur" => $datas["nom_utilisateur"],
				"prenom_utilisateur" => $datas["prenom_utilisateur"],
				"mail_utilisateur" => $datas["mail_utilisateur"],
				"identifiant_utilisateur" => $datas["identifiant_utilisateur"],
				"mdp_utilisateur" => $datas["mdp_utilisateur"],
				"type_utilisateur" => $datas["type_utilisateur"],
				"est_admin" => $datas["est_admin"],
				"est_pdg" => $datas["est_pdg"],
				"est_bloque" => $datas["est_bloque"]
			);
			$i++ ;
		}
		return $users ;
	}

	public function get_utilisateur_by_id( $id )
	{
		$req = $GLOBALS["bdd"]->prepare("call getUserById(?);");
		$req->execute(array($id));
		$data = $req->fetch();
		$user = array
		(
			"id_utilisateur" => $data["id_utilisateur"],
			"nom_utilisateur" => $data["nom_utilisateur"],
			"prenom_utilisateur" => $data["prenom_utilisateur"],
			"mail_utilisateur" => $data["mail_utilisateur"],
			"identifiant_utilisateur" => $data["identifiant_utilisateur"],
			"mdp_utilisateur" => $data["mdp_utilisateur"],
			"type_utilisateur" => $data["type_utilisateur"],
			"est_admin" => $datas["est_admin"],
			"est_pdg" => $datas["est_pdg"],
			"est_bloque" => $datas["est_bloque"]
		) ;
		return $user;
	}


	public function get_utilisateur_by_connection( $identifiant, $mdp )
	{
		$req = $GLOBALS["bdd"]->prepare("call getUserByIdentification(?,?)");
		$req->execute(array($identifiant,$mdp));
		$data = $req->fetch();
		$user = array
		(
			"id_utilisateur" => $data["id_utilisateur"],
			"nom_utilisateur" => $data["nom_utilisateur"],
			"prenom_utilisateur" => $data["prenom_utilisateur"],
			"mail_utilisateur" => $data["mail_utilisateur"],
			"identifiant_utilisateur" => $data["identifiant_utilisateur"],
			"mdp_utilisateur" => $data["mdp_utilisateur"],
			"type_utilisateur" => $data["type_utilisateur"],
			"est_admin" => $datas["est_admin"],
			"est_pdg" => $datas["est_pdg"],
			"est_bloque" => $datas["est_bloque"]
		) ;
		return $user;
	}

	public function get_utilisateurs_by_type( $id )
	{
		$req = $GLOBALS["bdd"]->prepare("call getUsersByTypeUser(?)");
		$req->execute(array($id));
		$users = array();
		$i = 0;
		while ( $datas = $req->fetch() )
		{
			$users[$i] = array
			(
				"id_utilisateur" => $datas["id_utilisateur"],
				"nom_utilisateur" => $datas["nom_utilisateur"],
				"prenom_utilisateur" => $datas["prenom_utilisateur"],
				"mail_utilisateur" => $datas["mail_utilisateur"],
				"identifiant_utilisateur" => $datas["identifiant_utilisateur"],
				"mdp_utilisateur" => $datas["mdp_utilisateur"],
				"type_utilisateur" => $datas["type_utilisateur"],
				"est_admin" => $datas["est_admin"],
				"est_pdg" => $datas["est_pdg"],
				"est_bloque" => $datas["est_bloque"]
			);
			$i++ ;
		}
		return $users ;
	}

	public function create_user($nom , $prenom , $mail , $identifiant , $mdp , $typeUser)
	{
		$req = $GLOBALS["bdd"]->prepare("call createUser(?,?,?,?,?,?)");
		return $req->execute(array($nom , $prenom , $mail , $identifiant , $mdp , $typeUser));
	}

	public function update_user($id, $nom , $prenom , $mail , $identifiant , $mdp , $typeUser)
	{
		$req = $GLOBALS["bdd"]->prepare("call updateUser(?,?,?,?,?,?,?)");
		return $req->execute(array($id, $nom , $prenom , $mail , $identifiant , $mdp , $typeUser));	
	}

	public function delete_user($id)
	{
		$req = $GLOBALS["bdd"]->prepare("call deleteUser(?)");
		return $req->execute(array($id));
	}
}

?>