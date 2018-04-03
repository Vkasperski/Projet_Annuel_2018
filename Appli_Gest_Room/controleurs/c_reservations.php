<?php
include("vues/v_nav.php");
$action = $_REQUEST['action'];
switch($action){
	case 'reservations':{
		include("vues/v_reservations.php");
		break;
	}
}

?>