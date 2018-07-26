<?php
include("../metier/reservation_metier.php");
include("../metier/header.php");
include("../metier/utilisateur_metier.php");

$reservationMetier = new reservation_metier();

$utilisateurMetier = new utilisateur_metier();

//$reservations = $reservationMetier->get_reservations_by_id_utilisateur($_SESSION["id"]);
$reservations = $reservationMetier->get_reservations_by_id_utilisateur(1);
?>
 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Icon Cards-->
      <!--<div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">26 New Messages!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">11 New Tasks!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">123 New Orders!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5">13 New Tickets!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>-->

      <!-- Planning -->
<?php

if($reservations[0]!= null)
{
  foreach ($reservations as $key) {
?>
	<label><h1><?php echo $key->get_description();?></h1></label><br>
	<label><?php echo $key->get_description();?></label><br>
	<label><?php echo date('d-m-Y H',strtotime($key->get_debut_reservation()));?> H</label> jusqu'a <label><?php echo date('d-m-Y H',strtotime($key->get_fin_reservation()));?> H</label><br>
  <?php
    $invites = $reservationMetier->get_reservations_invites($key->get_id_salle(), $key->get_debut_reservation(), $key->get_fin_reservation());
    if($invites[0]!= null)
    {
      echo "Paricipant(s) : <BR>"; 
      foreach ($invites as $invite) 
      {
  ?>
	<label><?php echo $utilisateurMetier->get_utilisateur_by_id(1)->get_nom_utilisateur()." ".$utilisateurMetier->get_utilisateur_by_id(1)->get_prenom_utilisateur(); ?></label><br>
	 <?php 
      }
   ?>
  <input type="submit" value="Modifier"><input type="submit" value="Supprimer"> <!-- controle supprimer  a faire en JS -->
<?php
    }
    else
      echo "Aucun Participant. <BR>";
  }
}
else{
  echo "Aucune réunion à venir. <BR>";
}
?>	      


    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->