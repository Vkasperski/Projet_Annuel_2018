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
				"mdp_utilisateur" => $datas["mdp_utilisateur"],
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
			"mdp_utilisateur" => $data["mdp_utilisateur"],
			"est_admin" => $datas["est_admin"],
			"est_pdg" => $datas["est_pdg"],
			"est_bloque" => $datas["est_bloque"]
		) ;
		return $user;
	}


	public function get_utilisateur_by_mail( $mail )
	{
		$req = $GLOBALS["bdd"]->prepare("call getUserByMail(?)");
		$req->execute(array($mail));
		$data = $req->fetch();
		$user = array
		(
			"id_utilisateur" => $data["id_utilisateur"],
			"nom_utilisateur" => $data["nom_utilisateur"],
			"prenom_utilisateur" => $data["prenom_utilisateur"],
			"mail_utilisateur" => $data["mail_utilisateur"],
			"mdp_utilisateur" => $data["mdp_utilisateur"],
			"est_admin" => $data["est_admin"],
			"est_pdg" => $data["est_pdg"],
			"est_bloque" => $data["est_bloque"]
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
				"mdp_utilisateur" => $datas["mdp_utilisateur"],
				"est_admin" => $datas["est_admin"],
				"est_pdg" => $datas["est_pdg"],
				"est_bloque" => $datas["est_bloque"]
			);
			$i++ ;
		}
		return $users ;
	}

	public function create_user($nom , $prenom , $mail , $mdp , $est_admin, $est_pdg, $est_bloque)
	{
		$req = $GLOBALS["bdd"]->prepare("call createUser(?,?,?,?,?,?,?)");
		return $req->execute(array($nom , $prenom , $mail , $mdp , $est_admin, $est_pdg, $est_bloque));
	}

	public function update_user($id, $nom , $prenom , $mail , $mdp , $est_admin, $pdg, $est_bloque)
	{
		$req = $GLOBALS["bdd"]->prepare("call updateUser(?,?,?,?,?,?,?,?)");
		return $req->execute(array($id, $nom, $prenom, $mail, $mdp, $est_admin, $pdg, $est_bloque));	
	}

	public function delete_user($id)
	{
		$req = $GLOBALS["bdd"]->prepare("call deleteUser(?)");
		return $req->execute(array($id));
	}
}
?>