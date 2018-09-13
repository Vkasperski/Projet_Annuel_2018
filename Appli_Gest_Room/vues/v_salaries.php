<?php
include("metier/header.php");
include("metier/utilisateur_metier.php");

$utilisateurMetier = new utilisateur_metier();

$users = $utilisateurMetier->get_utilisateurs();
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

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"> Utilisateurs</i></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Catégorie</th>
                  <th>Mail</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Catégorie</th>
                  <th>Mail</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <?php
                  foreach ($users as $key) 
                  {
                  ?>
                  <td><?php echo $key->get_nom_utilisateur()." ".$key->get_prenom_utilisateur() ?></td>
                  <td><?php
                  if ($key->get_est_pdg())
                    echo "PDG";
                  else if($key->get_est_admin())
                    echo "Administrateur";
                  else
                    echo "Collaborateur";
                  ?>
                  </td>
                  <td><?php echo $key->get_mail_utilisateur()  ?></td>
                </tr>
                <?php
                  }
                  ?>  
              </tbody>
            </table>
          </div>
        </div></br></br></br></br>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>*
      </div>-->