<?php
include("../metier/reservation_metier.php");
include("../metier/header.php");
include("../metier/salle_metier.php");

  if(Date('D')=="Mon"){
    $dateLundi = Date('Y-m-d');
  }else{
    $dateLundi = Date('Y-m-d',strtotime("last Monday"));
  }

  if(Date('D')=="Fri"){
    $dateVendredi = Date('Y-m-d');
  }else{
    $dateVendredi = Date('Y-m-d',strtotime("next Friday"));
  }
  $reservationMetier = new reservation_metier();

  $salleMetier = new salle_metier();

  

/*  include("v_nav.php");*/
?>
<meta charset="utf-8">
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

      <table class="table">
        <thead>
          <tr>
            <th></th>
            <th>Lundi</th>
            <th>Mardi</th>
            <th>Mercredi</th>
            <th>Jeudi</th>
            <th>Vendredi</th>
          </tr>
        </thead>
         <tbody>
          <tr>
            <td>8h00</td>
            <td>
              <?php 
              echo $dateLundi;
                $var = date('Y-m-d H:m:s',strtotime($dateLundi." 08:00:00" ));
                echo $var;
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s',strtotime($dateLundi)),date('Y-m-d H:m:s',strtotime($dateLundi." 09:00:00")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +1 day'." 08:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +1 day'." 09:00:00")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>  
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"], date('Y-m-d H:m:s', strtotime($dateLundi . ' +2 day'." 08:00:00")), $dateLundi.' +2 day'." 09:00:00");
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +3 day'." 08:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +3 day'." 09:00:00")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +4 day'." 08:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +4 day'." 09:00:00")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
          </tr>   
          <tr class="danger">
            <td>9h00</td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s',strtotime($dateLundi." 09:00:00")),strtotime($dateLundi." 10:00:00"));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +1 day'." 09:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +1 day'." 10:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>  
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +2 day'." 09:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +2 day'." 10:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +3 day'." 09:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +3 day'." 10:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +4 day'." 09:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +4 day'." 10:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
          </tr>
          <tr class="info">
            <td>10h00</td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s',strtotime($dateLundi." 10:00:00")),strtotime($dateLundi." 11:00:00"));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +1 day'." 10:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +1 day'." 11:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>  
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +2 day'." 10:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +2 day'." 11:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +3 day'." 10:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +3 day'." 11:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +4 day'." 10:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +4 day'." 11:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
          </tr>
          <tr class="warning">
            <td>11h00</td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s',strtotime($dateLundi." 11:00:00")),strtotime($dateLundi." 12:00:00"));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +1 day'." 11:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +1 day'." 12:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>  
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +2 day'." 11:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +2 day'." 12:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +3 day'." 11:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +3 day'." 12:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +4 day'." 11:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +4 day'." 12:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
          </tr>
          <tr class="active">
            <td>12h00</td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s',strtotime($dateLundi." 12:00:00")),strtotime($dateLundi." 13:00:00"));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +1 day'." 12:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +1 day'." 13:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>  
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +2 day'." 12:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +2 day'." 13:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +3 day'." 12:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +3 day'." 13:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +4 day'." 12:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +4 day'." 13:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
          </tr>
          <tr class="active">
            <td>13h00</td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s',strtotime($dateLundi." 13:00:00")),strtotime($dateLundi." 14:00:00"));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +1 day'." 14:00:00 ")),date('Y-m-d H:m:s',strtotime($dateLundi.' +1 day'." 14:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>  
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +2 day'." 14:00:00 ")),date('Y-m-d H:m:s',strtotime($dateLundi.' +2 day'." 14:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +3 day'." 14:00:00 ")),date('Y-m-d H:m:s',strtotime($dateLundi.' +3 day'." 14:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +4 day'." 14:00:00 ")),date('Y-m-d H:m:s',strtotime($dateLundi.' +4 day'." 14:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
          </tr>
          <tr class="active">
            <td>14h00</td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s',strtotime($dateLundi." 14:00:00")),strtotime($dateLundi." 15:00:00"));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +1 day'." 14:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +1 day'." 15:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>  
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +2 day'." 14:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +2 day'." 15:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +3 day'." 14:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +3 day'." 15:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +4 day'." 14:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +4 day'." 15:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
          </tr>
          <tr class="active">
            <td>15h00</td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s',strtotime($dateLundi." 15:00:00")),strtotime($dateLundi." 16:00:00"));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +1 day'." 15:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +1 day'." 16:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>  
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +2 day'." 15:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +2 day'." 16:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +3 day'." 15:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +3 day'." 16:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +4 day'." 15:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +4 day'." 16:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
          </tr>
          <tr class="active">
            <td>16h00</td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s',strtotime($dateLundi." 16:00:00")),strtotime($dateLundi." 17:00:00"));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +1 day'." 16:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +1 day'." 17:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>  
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +2 day'." 16:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +2 day'." 17:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +3 day'." 16:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +3 day'." 17:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +4 day'." 16:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +4 day'." 17:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
          </tr>
          <tr class="active">
            <td>17h00</td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s',strtotime($dateLundi." 17:00:00")),strtotime($dateLundi." 18:00:00"));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +1 day'." 17:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +1 day'." 18:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>  
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +2 day'." 17:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +2 day'." 18:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +3 day'." 17:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +3 day'." 18:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +4 day'." 17:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +4 day'." 18:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
          </tr>
          <tr class="active">
            <td>18h00</td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s',strtotime($dateLundi." 18:00:00")),strtotime($dateLundi." 19:00:00"));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +1 day'." 18:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +. day'." 19:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>  
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +2 day'." 18:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +2 day'." 19:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +3 day'." 18:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +3 day'." 19:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
            <td>
              <?php
                $resa = $reservationMetier->get_reservations_intervalle_by_id_utilisateur($_SESSION["id"],date('Y-m-d H:m:s', strtotime($dateLundi . ' +4 day'." 18:00:00")),date('Y-m-d H:m:s',strtotime($dateLundi.' +4 day'." 19:00:00 ")));
                if(current($resa) != null)
                  echo ($salleMetier->get_salle_by_id( current( $resa )->get_id_salle() ))->get_nom_salle() ;
                else
                  echo "Aucune réservation";
              ?>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

