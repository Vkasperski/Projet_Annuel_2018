<?php

//BDD MySql
////////////////////////////////////////////////////////////////////////////////////////////////////////////
$srv = 'localhost'; //adresse du serveur (localhost si inconu)
$user = 'root'; //Nom d'utilisateur MySql (root si inconu)
$pass  = ''; //Mot de passe MySQL
$db = 'salles_de_reunion'; //Base de donnée
$port = '3306'; //Port MySql (3306 par defaut)


try {
    $bdd = new PDO('mysql:host='.$srv.';port='.$port.';dbname='.$db, $user, $pass);
}
catch(PDOException $e)
{
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
}

?>

