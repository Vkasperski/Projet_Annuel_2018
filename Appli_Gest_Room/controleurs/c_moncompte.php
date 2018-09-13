<?php
include("vues/v_nav_admin.php");
$action = $_REQUEST['action'];
switch($action){
	case 'moncompte':{
		include("vues/v_moncompte.php");
		break;
	}

	case 'collaborateur':{
		include("vues/v_salaries.php");
		break;
	}

	case 'nouveau_collaborateur':{
		include("vues/v_ajoutcollab.php");
		break;
	}

	case 'support_technique':{
		include("vues/v_support.php");
		break;
	}

	case 'fonctionnement':{
		include("vues/v_fonctionnement.php");
		break;
	}

}

?>