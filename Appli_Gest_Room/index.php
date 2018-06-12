<?php
//require_once("include/fonction.php");

include("vues/v_header.php");

       
if(!isset($_REQUEST['uc'])){
     $_REQUEST['uc'] = 'connexion';
}	 
$uc = $_REQUEST['uc'];
switch($uc){
	case 'connexion':{
		include("controleurs/c_connexion.php");
                break;
	}
	case 'home' :{
		include("controleurs/c_home.php");
                break;
	}
	case 'salles' :{
		include("controleurs/c_salles.php");
                break; 
	}
        case 'reservations' :{
		include("controleurs/c_reservations.php");
                break; 
	}
        case 'moncompte' :{
		include("controleurs/c_moncompte.php");
                break; 
	}
}
//=======
include("vues/v_nav.php");

       
if (!isset($_REQUEST['action'])) {
    
    $action = 'accueil';

} else {
    $action = $_REQUEST['action'];
}
// vue qui crée l’en-tête de la page
//$pdo = connect();

switch ($action) {
    
        
        // Accueil
    case 'accueil' : {
            include("vues/v_home.php");
            break;
        }
        //fin accueil
        
//    case 'dames1' : {
//            include ("vues/v_dames1.php");
//            break ;
//    }

}


include("vues/v_foot.php") ;

?>