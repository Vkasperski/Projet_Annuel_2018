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
	
	public function get_utilisateurs_by_type( $id )
	{
		$userData = new utilisateurData() ;
		
		$i = 0; 
		foreach ($userData->get_utilisateurs_by_type($id) as $unUser) {
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

	public function create_user($nom , $prenom , $mail , $identifiant , $mdp , $typeUser)
	{
		$userData = new utilisateurData() ;
		return $userData->create_user($nom , $prenom , $mail , $identifiant , $mdp , $typeUser);
	}

	public function update_user($id, $nom , $prenom , $mail , $identifiant , $mdp , $typeUser)
	{
		$userData = new utilisateurData() ;
		return $userData->update_user($id, $nom , $prenom , $mail , $identifiant , $mdp , $typeUser);
	}

	public function delete_user($id)
	{
		$userData = new utilisateurData();
		$userData->delete_user($id);
	}
}


?>


logiciel SaaS couvrant de bout en bout les activités de sourcing, Contract & Service Delivery Management des DSI & Directions Digitales


Veille & Intelligence économique
Gestion stratégique de projets IT
Gestion d’appels d’offres
Négociation contractuelle
Gestion avancée des actifs contractuels
Pilotage Budgétaire
Service Delivery Management
Service Owner Management