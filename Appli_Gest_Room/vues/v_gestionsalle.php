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
	<div class="col-sm-10"><a href="">Nouvelle salle</a></div><!-- seul pdg et admin peuvent voir ce bouton -->
      <table class="table">
         <tbody>
          <tr>
            <td data-toggle="modal" data-target="#myModal">Salle A</td>
            <td>Détails de la salle</td>
            <td>Disponible</td>
          </tr>   
          <tr class="danger">
            <td data-toggle="modal" data-target="#myModal">Salle B</td>
            <td>Détails de la salle</td>
            <td>Indisponible</td>
          </tr>
          <tr class="info">
            <td data-toggle="modal" data-target="#myModal">Salle C</td>
            <td>Détails de la salle</td>
            <td>Disponible</td>
          </tr>
        </tbody>
      </table>

	<!-- Modal -->


	<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="/action_page.php">
            <div class="form-group">
              <label class="control-label col-sm-2" for="salle">Salle :</label>
              <div class="col-sm-10">
		<input type="text" class="form-control" id="salle">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Détails :</label>
              <div class="col-sm-10"> 
                <input type="text" class="form-control" id="details">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">État :</label>
              <div class="col-sm-10"> 
                <input type="radio" class="form-control" id="etat">Disponible
		<input type="radio" class="form-control" id="etat">Indisponible
              </div>
            </div>
            <div class="form-group"> 
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Valider</button>
              </div>
            </div>
	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->