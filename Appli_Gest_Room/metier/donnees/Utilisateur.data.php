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
				"id_type_utilisateur" => $datas["id_type_utilisateur"]
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
			"id_type_utilisateur" => $data["id_type_utilisateur"]
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
			"id_type_utilisateur" => $data["id_type_utilisateur"]
		) ;
		return $user;
	}
}

?>