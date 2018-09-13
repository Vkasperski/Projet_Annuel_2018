<?php
include("metier/utilisateur_metier.php");

$utilisateurMetier = new utilisateur_metier();

$user = $utilisateurMetier->get_utilisateur_by_id(1);


if(isset($_POST["envoyer"])){
  if($_POST["newmdp"] == $_POST["conf_newmdp"])
  {
    $utilisateurMetier->update_user(1,$user->get_nom_utilisateur(), $user->get_prenom_utilisateur(), $user->get_mail_utilisateur(), $_POST["newmdp"], $user->get_est_admin(),$user->get_est_pdg(),$user->get_est_bloque()); 
  }
}
?>
<meta charset="utf-8">
<div class="content-wrapper">
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
    	<li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Réservations</li>
    </ol>
	<table class="table">
        <thead>
         <tr>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Email</th>
          <th>Fonction</th>
          <th>Etat Compte</th>
         </tr>
        </thead>
        <tbody>
          <tr> 
              <td><?php echo $user->get_nom_utilisateur(); ?></td>
              <td><?php echo $user->get_prenom_utilisateur(); ?></td>
              <td><?php echo $user->get_mail_utilisateur(); ?></td> 
              <td><?php 
                    if($user->get_est_pdg())
                      echo  "PDG";
                    else if($user->get_est_admin())
                      echo  "Administrateur";
                    else
                      echo "Collaborateur";
              ?></td>
              <td>Actif</td>
          </tr>
       	</tbody>
    </table>
    <form method="post">
    <p>Nouveau mot de passe : <input type="text" name="newmdp"></p>
    <p>Confirmer nouveau mot de passe : <input type="text" name="conf_newmdp"></p>
    <p><input type="submit" name="envoyer" value="Valider"></p>
    </form>

</div>