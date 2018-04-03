<?php
include("vues/v_nav.php");
$action = $_REQUEST['action'];
switch($action){
	case 'accueil':{
		include("vues/v_home.php");
		break;
	}
}

?>