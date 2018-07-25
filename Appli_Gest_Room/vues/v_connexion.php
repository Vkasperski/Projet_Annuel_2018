<?php
session_start();
include("metier/header.php");
if (isset($_SESSION["mail"])) {
  header('Location: v_home.php');
}

include("metier/utilisateur_metier.php");
$error= NULL ;
if(isset($_POST["conect"]))
{
  $mail= $_POST["email"];
  $pwd = $_POST["pwd"];
  $userMetier = new utilisateur_metier();
  $user = $userMetier->get_utilisateur_by_mail($mail);
  if ($user->get_id_utilisateur() != null) {
        $_SESSION["id"] = $user->get_id_utilisateur();
        $_SESSION["nom"] = $user->get_nom_utilisateur();
        $_SESSION["prenom"] = $user->get_prenom_utilisateur();
        $_SESSION["mail"] = $user->get_mail_utilisateur();
        $_SESSION["psw"] = $user->get_mdp_utilisateur();
        $_SESSION["admin"] = $user->get_est_admin();
        $_SESSION["pdg"] = $user->get_est_pdg();
        $_SESSION["bloque"] = $user->get_est_bloque() ;
    if($_SESSION["bloque"] < 3)
    {
      if ($_SESSION["psw"] == $pwd) {
        //On remet le compteur du bloquage de compte à 0
        $userMetier->update_user($_SESSION["id"],$_SESSION["nom"],$_SESSION["prenom"],$_SESSION["mail"],$_SESSION["psw"],$_SESSION["admin"],$_SESSION["pdg"],0);

        header('Location: vues/v_home.php');
      }else{
        $_SESSION["bloque"] = $_SESSION["bloque"]+1;
        $userMetier->update_user(
          $_SESSION["id"],
          $_SESSION["nom"],
          $_SESSION["prenom"],
          $_SESSION["mail"],
          $_SESSION["psw"],
          $_SESSION["admin"],
          $_SESSION["pdg"],
          $_SESSION["bloque"]
        );
        if($_SESSION["bloque"] == 3){
          $error = "Ce compte a été bloqué suite à de trop nombreuse tentatives de connection";
        }else{
          $error = "Erreur : ". (3-$_SESSION["bloque"])." essais restant.";

        }
      }
    }
    else
    {
      $error = "Ce compte a été bloqué suite à de trop nombreuse tentatives de connection";
    }

  }else{
    $error = "Erreur de saisie de l'email ou du mot de passe";
  }

}  
?>





<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button></br>
<div style="color : red;"><b>
<?php
  echo $error;
?>
</b></div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST">
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Email:</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Password:</label>
              <div class="col-sm-10"> 
                <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Enter password">
              </div>
            </div>
            <div class="form-group"> 
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label><input type="checkbox"> Remember me</label>
                </div>
              </div>
            </div>
            <div class="form-group"> 
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="conect" class="btn btn-default">Submit</button>
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