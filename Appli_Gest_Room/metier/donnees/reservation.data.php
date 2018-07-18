<?php
include("connexion_bdd.php");

class reservationData 
{

	public function get_reservations()
	{
		$req = $GLOBALS["bdd"]->prepare("call getReservations");
		$req->execute(array());
		$reservations = array();
		$i = 0;
		while ( $datas = $req->fetch())
		{
			$reservations[$i] = array
			(
				"id_utilisateur" => $datas["id_utilisateur"],
				"id_salle" => $datas["id_salle"],
				"debut_reservation" => $datas["debut_reservation"],
				"fin_reservation" => $datas["fin_reservation"],
				"est_facultatif" => $datas["est_facultatif"],
				"description" => $datas["description"],
				"est_invite" => $data["est_invite"]
			);
			$i++;		
		}
		return $reservations;
	}

	public function get_reservations_by_id_user($id_user)
	{
		$req = $GLOBALS["bdd"]->prepare("call getReservationsByIDUser(?)");
		$req->execute(array($id_user));
		$reservations = array();
		$i = 0;
		while ( $datas = $req->fetch())
		{
			$reservations[$i] = array
			(
				"id_utilisateur" => $datas["id_utilisateur"],
				"id_salle" => $datas["id_salle"],
				"debut_reservation" => $datas["debut_reservation"],
				"fin_reservation" => $datas["fin_reservation"],
				"est_facultatif" => $datas["est_facultatif"],
				"description" => $datas["description"],
				"est_invite" => $data["est_invite"]
			);
			$i++;		
		}
		return $reservations;
	}


	public function get_reservations_by_id_salle($id_salle)
	{
		$req = $GLOBALS["bdd"]->prepare("call getReservationsByIDSalle(?)");
		$req->execute(array($id_salle));
		$reservations = array();
		$i = 0;
		while ( $datas = $req->fetch())
		{
			$reservations[$i] = array
			(
				"id_utilisateur" => $datas["id_utilisateur"],
				"id_salle" => $datas["id_salle"],
				"debut_reservation" => $datas["debut_reservation"],
				"fin_reservation" => $datas["fin_reservation"],
				"est_facultatif" => $datas["est_facultatif"],
				"description" => $datas["description"],
				"est_invite" => $data["est_invite"]
			);
			$i++;		
		}
		return $reservations;
	}

	// Ajout d'une réservation
	public function create_reservation($id_user , $id_salle , $debut , $fin , $est_facultatif , $description, $est_invite)
	{
		$req = $GLOBALS["bdd"]->prepare("call createReservation(?,?,?,?,?,?,?)");
		return $req->execute(array($id_user , $id_salle , $debut , $fin , $est_facultatif , $description, $est_invite));
	}



	public function verif_possibilite_reservation($id_user, $id_salle, $debut_reservation, $fin_reservation)
	{
		$req = $GLOBALS["bdd"]->prepare("call getReservationsExistant(?,?,?,?)");
		$req->execute(array($id_user, $id_salle, $debut_reservation, $fin_reservation));
		$reservations = array();
		$i = 0;
		while ( $datas = $req->fetch())
		{
			$reservations[$i] = array
			(
				"id_utilisateur" => $datas["id_utilisateur"],
				"id_salle" => $datas["id_salle"],
				"debut_reservation" => $datas["debut_reservation"],
				"fin_reservation" => $datas["fin_reservation"],
				"est_facultatif" => $datas["est_facultatif"],
				"description" => $datas["description"],
				"est_invite" => $datas["est_invite"]
			);
			$i++;	
		}
		return $reservations ;
	}

	public function update_reservation($id_user , $id_salle , $debut , $fin , $est_facultatif , $description, $est_invite)
	{
		$req = $GLOBALS["bdd"]->prepare("call createReservation(?,?,?,?,?,?,?)");
		return $req->execute(array($id_user , $id_salle , $debut , $fin , $est_facultatif , $description, $est_invite));	
	}
}

?>