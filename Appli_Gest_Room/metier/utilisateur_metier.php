<?php
include("utilisateur.php");
include("donnees/Utilisateur.data.php");

class utilisateur_metier 
{
	// Récupération de tout les utilisateurs dans un tableau d'utilisateurs
	public function get_utilisateurs()
	{
		$userData = new utilisateurData() ;
		//$users = $userD->get_utilisateurs() ;
		$i = 0; 
		foreach ($userData->get_utilisateurs() as $unUser) {
			$tab_users[$i] = new utilisateur(
				$unUser["id_utilisateur"],
				$unUser["nom_utilisateur"],
				$unUser["prenom_utilisateur"],
				$unUser["mail_utilisateur"],
				$unUser["identifiant_utilisateur"],
				$unUser["mdp_utilisateur"],
				$unUser["id_type_utilisateur"]
			) ;
			$i++;
		}
		return $tab_users ;
	}

	public function get_utilisateur_by_id($id)
	{
		$userData = new utilisateurData() ;
		$userArray = $userData->get_utilisateur_by_id($id) ;
		$user = new utilisateur(
			$userArray["id_utilisateur"],
			$userArray["nom_utilisateur"],
			$userArray["prenom_utilisateur"],
			$userArray["mail_utilisateur"],
			$userArray["identifiant_utilisateur"],
			$userArray["mdp_utilisateur"],
			$userArray["id_type_utilisateur"]
		) ;

		return $user ;
	}

	public function get_utilisateur_by_connection( $identifiant, $mdp )
	{
		$userData = new utilisateurData() ;
		$userArray = $userData->get_utilisateur_by_connection( $identifiant, $mdp ) ;
		$user = new utilisateur(
			$userArray["id_utilisateur"],
			$userArray["nom_utilisateur"],
			$userArray["prenom_utilisateur"],
			$userArray["mail_utilisateur"],
			$userArray["identifiant_utilisateur"],
			$userArray["mdp_utilisateur"],
			$userArray["id_type_utilisateur"]
		) ;

		return $user ;
	}	
}

$userM = new utilisateur_metier();
$user = $userM->get_utilisateur_by_connection('vka','mdp');
echo($user->get_id_utilisateur(). " " . $user->get_nom_utilisateur(). " " . $user->get_prenom_utilisateur(). " " . $user->get_mail_utilisateur(). " " . $user->get_identifiant_utilisateur(). " " . $user->get_mdp_utilisateur(). " " . $user->get_id_type_utilisateur()) ;

?>