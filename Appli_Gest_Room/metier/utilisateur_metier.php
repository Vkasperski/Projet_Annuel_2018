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
				$unUser["mdp_utilisateur"],
				$unUser["est_admin"],
				$unUser["est_pdg"],
				$unUser["est_bloque"]
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
			$userArray["mdp_utilisateur"],
			$userArray["est_admin"],
			$userArray["est_pdg"],
			$userArray["est_bloque"]
		) ;

		return $user ;
	}

	public function get_utilisateur_by_mail( $identifiant )
	{
		$userData = new utilisateurData() ;
		$userArray = $userData->get_utilisateur_by_mail( $identifiant ) ;
		$user = new utilisateur(
			$userArray["id_utilisateur"],
			$userArray["nom_utilisateur"],
			$userArray["prenom_utilisateur"],
			$userArray["mail_utilisateur"],
			$userArray["mdp_utilisateur"],
			$userArray["est_admin"],
			$userArray["est_pdg"],
			$userArray["est_bloque"]
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
				$unUser["mdp_utilisateur"],
				$unUser["est_admin"],
				$unUser["est_pdg"],
				$unUser["est_bloque"]
			) ;
			$i++;
		}
		return $tab_users ;
	}

	public function create_user($nom , $prenom , $mail  , $mdp , $est_admin, $est_pdg, $est_bloque)
	{
		$userData = new utilisateurData() ;
		return $userData->create_user($nom , $prenom , $mail  , $mdp , $est_admin, $est_pdg, $est_bloque);
	}

	public function update_user($id, $nom , $prenom , $mail  , $mdp , $est_admin, $est_pdg, $est_bloque)
	{
		$userData = new utilisateurData() ;
		return $userData->update_user($id, $nom , $prenom , $mail  , $mdp , $est_admin, $est_pdg, $est_bloque);
	}

	public function delete_user($id)
	{
		$userData = new utilisateurData();
		$userData->delete_user($id);
	}
}

?>