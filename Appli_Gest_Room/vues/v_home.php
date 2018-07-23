<?php
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
            <td>Aucune réservation</td>
            <td>Aucune réservation</td>
            <td>Réserver par Xavier DURAND<br>Salle LOKI</td>
            <td>Aucune réservation</td>
            <td>Aucune réservation</td>
          </tr>   
          <tr class="danger">
            <td>9h00</td>
            <td>Réserver par Xavier DURAND<br>Salle LOKI</td>
            <td>Aucune réservation</td>
            <td>Aucune réservation</td>
            <td>Aucune réservation</td>
            <td>Réserver par Xavier DURAND<br>Salle LOKI</td>
          </tr>
          <tr class="info">
            <td>10h00</td>
            <td>Aucune réservation</td>
            <td>Réserver par Xavier DURAND<br>Salle LOKI</td>
            <td>Aucune réservation</td>
            <td>Réserver par Xavier DURAND<br>Salle LOKI</td>
            <td>Aucune réservation</td>
          </tr>
          <tr class="warning">
            <td>11h00</td>
            <td>Aucune réservation</td>
            <td>Aucune réservation</td>
            <td>Réserver par Xavier DURAND<br>Salle LOKI</td>
            <td>Aucune réservation</td>
            <td>Aucune réservation</td>
          </tr>
          <tr class="active">
            <td>12h00</td>
            <td>Aucune réservation</td>
            <td>Réserver par Xavier DURAND<br>Salle LOKI</td>
            <td>Aucune réservation</td>
            <td>Réserver par Xavier DURAND<br>Salle LOKI</td>
            <td>Réserver par Xavier DURAND<br>Salle LOKI</td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

