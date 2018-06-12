<?php
include("vues/v_nav.php");
$action = $_REQUEST['action'];
switch($action){
	case 'moncompte':{
		include("vues/v_moncompte.php");
		break;
	}
}

?>