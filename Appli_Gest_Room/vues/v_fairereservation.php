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

      <!-- Planning -->


      <label><h3>Les reservations</h3></label>
   
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
            <td>Aucune reservation</td>
            <td>Aucune reservation</td>
            <td>Reserver par Xavier DURAND</td>
            <td>Aucune reservation</td>
            <td>Aucune reservation</td>
          </tr>   
          <tr class="danger">
            <td>9h00</td>
            <td>Reserver par Xavier DURAND</td>
            <td>Aucune reservation</td>
            <td>Aucune reservation</td>
            <td>Aucune reservation</td>
            <td>Reserver par Xavier DURAND</td>
          </tr>
          <tr class="info">
            <td>10h00</td>
            <td>Aucune reservation</td>
            <td>Reserver par Xavier DURAND</td>
            <td>Aucune reservation</td>
            <td>Reserver par Xavier DURAND</td>
            <td>Aucune reservation</td>
          </tr>
          <tr class="warning">
            <td>11h00</td>
            <td>Aucune reservation</td>
            <td>Aucune reservation</td>
            <td>Reserver par Xavier DURAND</td>
            <td>Aucune reservation</td>
            <td>Aucune reservation</td>
          </tr>
          <tr class="active">
            <td>12h00</td>
            <td>Aucune reservation</td>
            <td>Reserver par Xavier DURAND</td>
            <td>Aucune reservation</td>
            <td>Reserver par Xavier DURAND</td>
            <td>Reserver par Xavier DURAND</td>
          </tr>
          <tr class="active">
            <td>13h00</td>
            <td>Aucune reservation</td>
            <td>Reserver par Xavier DURAND</td>
            <td>Aucune reservation</td>
            <td>Reserver par Xavier DURAND</td>
            <td>Reserver par Xavier DURAND</td>
          </tr>
          <tr class="active">
            <td>14h00</td>
            <td>Aucune reservation</td>
            <td>Reserver par Xavier DURAND</td>
            <td>Aucune reservation</td>
            <td>Reserver par Xavier DURAND</td>
            <td>Reserver par Xavier DURAND</td>
          </tr>
          <tr class="active">
            <td>15h00</td>
            <td>Aucune reservation</td>
            <td>Reserver par Xavier DURAND</td>
            <td>Aucune reservation</td>
            <td>Reserver par Xavier DURAND</td>
            <td>Reserver par Xavier DURAND</td>
          </tr>
          <tr class="active">
            <td>16h00</td>
            <td>Aucune reservation</td>
            <td>Reserver par Xavier DURAND</td>
            <td>Aucune reservation</td>
            <td>Reserver par Xavier DURAND</td>
            <td>Reserver par Xavier DURAND</td>
          </tr>
          <tr class="active">
            <td>17h00</td>
            <td>Aucune reservation</td>
            <td>Reserver par Xavier DURAND</td>
            <td>Aucune reservation</td>
            <td>Reserver par Xavier DURAND</td>
            <td>Reserver par Xavier DURAND</td>
          </tr>
        </tbody>
      </table>

	<label><h3>Faire une reservation : </h3></label>
	<div class="row">
		<div class="col-sm-6">
			Titre : <input type="text" name="titre" placeholdee="Titre">
		</div>
		<div class="col-sm-6">
			Description : <input type="text" name="description" placeholdee="Description">
		</div>
		<div class="col-sm-6">
			Date : (calendrier en js)
		</div>
		<div class="col-sm-6">
			Heure debut : combo heure a alimenter avec la bdd <br>
			Heure fin : pareil
		</div>
	</div>
	<input type="submit" value="Valider">
	
      
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->