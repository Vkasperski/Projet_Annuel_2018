<?php
include("vues/v_nav.php");
$action = $_REQUEST['action'];
switch($action){
	case 'salles':{
		include("vues/v_salles.php");
		break;
	}
}

?>