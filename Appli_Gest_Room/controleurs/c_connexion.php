<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'demandeConnexion':{
		include("vues/v_connexion.php");
		include("metier/utilisateur_metier.php");
		break;
	}
	case 'valideConnexion':{
		//$login = $_REQUEST['login'];
		//$mdp = $_REQUEST['mdp'];
		
		
		//if(!is_array( $visiteur)){
		//	
		//	ajouterErreur("Login ou mot de passe incorrect");
		//	include("vues/v_erreurs.php");
		//	include("vues/v_connexion.php");
		//}
		 //  elseif ($visiteur['comp'] == '1'){
			
		//	$id = $visiteur['id'];
		//	$nom =  $visiteur['nom'];
		//	$prenom = $visiteur['prenom'];
		//	connecter($id,$nom,$prenom);
		//	include("vues/v_sommaire_comp.php");
		//	
		//}
		//  else{
		//	$id = $visiteur['id'];
		//	$nom =  $visiteur['nom'];
		//	$prenom = $visiteur['prenom'];
		//	connecter($id,$nom,$prenom);
		//	include("vues/v_sommaire.php");
		//
		//}
		//break;
		
		$utilisaeurM = new utilisaeur_metier();
		$utilisaeur = $utilisaeurM->get_utilisateur_by_connection($login,$mdp);
		if(is_null($utilisaeur)){
			echo "lol";
		}

	}
	default :{
		include("vues/v_connexion.php");
		
		break;
	}
}
?>