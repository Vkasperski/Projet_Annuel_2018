<?php
include("connexion_bdd.php");

function getUtilisateurs(){
	$req = $GLOBALS["bdd"]->query("call getUsers();");
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
?>