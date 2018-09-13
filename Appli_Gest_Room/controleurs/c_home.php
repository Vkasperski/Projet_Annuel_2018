<?php
include("metier/header.php");
if($_SESSION["admin"] || $_SESSION["pdg"]){
	//include("vues/v_nav_admin.php");
}else{
	//include("vues/v_nav.php");
}
include("vues/v_nav_admin.php");
$action = $_REQUEST['action'];
switch($action){
	case 'accueil':{
		include("vues/v_home.php");
		break;
	}
}

?>