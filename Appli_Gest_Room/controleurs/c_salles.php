<?php
include("vues/v_nav_admin.php");
$action = $_REQUEST['action'];
switch($action){
	case 'salles':{
		include("vues/v_salles.php");
		break;
	}

	case 'gestion_salles':
		include("vues/v_gestionsalle.php");
		break;
}

?>