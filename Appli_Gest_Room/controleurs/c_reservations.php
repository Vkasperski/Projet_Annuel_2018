<?php
include("vues/v_nav_admin.php");
$action = $_REQUEST['action'];
switch($action){
	case 'reservations':{
		include("vues/v_reservations.php");
		break;
	}

	case 'faire_reservation':{
		include("vues/v_fairereservation.php");
		break;
	}

	case 'gestion_reservation' :{
		include("vues/v_gestionreservation.php");
		break;
	}
}

?>