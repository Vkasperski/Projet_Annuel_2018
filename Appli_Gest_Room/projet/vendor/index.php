<?php
//require_once("include/fonction.php");

include("vues/v_header.php");
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
        
    case 'salles' : {
            include ("vues/v_salles.php");
            break ;
    }

    case 'reservations' : {
            include ("vues/v_reservations.php");
            break ;
    }

    case 'salaries' : {
            include ("vues/v_salaries.php");
            break ;
    }

    case 'moncompte' : {
        include ("vues/v_moncompte.php");
        break ;
    }
}

include("vues/v_foot.php") ;