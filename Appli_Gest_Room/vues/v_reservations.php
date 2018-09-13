<!-- GENERER LE TABLEAU AVEC LA BDD-->
<!-- QUAND JE CLIQUE SUR JE RESERVE, JE SUIS REDIRIGER VERS v_fairereservation-->
<!-- index.php?uc=reservations&action=faire_reservation-->
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
      <div class="row">
        <div class="col-sm-6">
          <label><h3>Reserver une salle</h3></label>
             <table class="table">
              <thead>
                <tr>
                  <th>Salle</th>
                  <th>Matériel</th>
                  <th>Réserver</th>
                </tr>
              </thead>
               <tbody>
                <tr>
                  <td>Salle LOKI</td>
                  <td>Surface Microsoft Hub, enceinte, table, canapé, terrasse</td>
                  <td><a href="index.php?uc=reservations&action=faire_reservation"><input type="submit" value="Je réserve"></a></td>
                </tr>
                <tr>
                  <td>Salle KOLO</td>
                  <td>Tables, chaises, projecteur</td>
                  <td><a href="index.php?uc=reservations&action=faire_reservation"><input type="submit" value="Je réserve"></a></td>
                </tr>
              </tbody>
            </table>
        </div>
        <div class="col-sm-6">
          <label><h3>Mes réservations</h3></label>
          <table class="table">
              <thead>
                <tr>
                  <th>Salle</th>
                  <th>Réunion</th>
                  <th>Date</th>
                  <th>Heure</th>
                </tr>
              </thead>
               <tbody>
                  <tr> 
                    <td>Salle LOKI</td>
                    <td><a href="index.php?uc=reservations&action=gestion_reservation">Rendez-vous hebdomadaire avec Lacoste</a></td>
                    <td>28/08/2018</td>
                    <td>14h00</td>
                    </a>
                  </tr>
              </tbody>
            </table>
        </div>
      </div>
        
        </div>
      </div>
</div>