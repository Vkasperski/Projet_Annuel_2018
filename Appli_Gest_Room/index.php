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


include("vues/v_foot.php") ;

?>