<?php
include("reservation.php");
include("donnees/reservation.data.php");



//https://openclassrooms.com/forum/sujet/verifier-une-date-par-rapport-a-deux-autres-dates



class reservation_metier
{
	// Récupération de toute les Reservations dans un tableau de reservation
	public function get_reservations()
	{
		$resData = new reservationData() ;
		$i = 0; 
		foreach ($resData->get_reservations() as $uneRes) {
			$tab_res[$i] = new reservation(
				$uneRes["id_utilisateur"],
				$uneRes["id_salle"],
				$uneRes["debut_reservation"],
				$uneRes["fin_reservation"],
				$uneRes["est_facultatif"],
				$uneRes["description"],
				$uneRes["est_invite"]
			) ;
			$i++;
		}
		return $tab_res ;
	}


	//Récupération de toute les Reservations d'un utilisateur
	public function get_reservations_by_id_utilisateur($id)
	{
		$resData = new reservationData() ;
		$i = 0;
		$tab_res[0] = null; 
		foreach ($resData->get_reservations_by_id_user($id) as $uneRes) {
			$tab_res[$i] = new reservation(
				$uneRes["id_utilisateur"],
				$uneRes["id_salle"],
				$uneRes["debut_reservation"],
				$uneRes["fin_reservation"],
				$uneRes["est_facultatif"],
				$uneRes["description"],
				$uneRes["est_invite"]
			) ;
			$i++;
		}
		return $tab_res ;
	}


	//Récupération de toute les Reservations d'une salle
	public function get_reservations_by_id_salle($id)
	{
		$resData = new reservationData() ;
		$i = 0;
		$tab_res[0] = null; 
		foreach ($resData->get_reservations_by_id_salle($id) as $uneRes) {
			$tab_res[$i] = new reservation(
				$uneRes["id_utilisateur"],
				$uneRes["id_salle"],
				$uneRes["debut_reservation"],
				$uneRes["fin_reservation"],
				$uneRes["est_facultatif"],
				$uneRes["description"],
				$uneRes["est_invite"]
			) ;
			$i++;
		}
		return $tab_res ;
	}

	//Récupération des réservations de la semaine
	public function get_reservations_intervalle($date_debut, $date_fin)
	{
		$resData = new reservationData() ;
		$i = 0;
		$tab_res[0] = null; 
		foreach ($resData->get_reservations_intervalle($date_debut, $date_fin) as $uneRes) 
		{
			$tab_res[$i] = new reservation(
				$uneRes["id_utilisateur"],
				$uneRes["id_salle"],
				$uneRes["debut_reservation"],
				$uneRes["fin_reservation"],
				$uneRes["est_facultatif"],
				$uneRes["description"],
				$uneRes["est_invite"]
			) ;
			$i++;
		}
		return $tab_res ;
	}

	
	//Récupération des réservations de la semaine d'un utilisateur
	public function get_reservations_intervalle_by_id_utilisateur($id, $date_debut, $date_fin)
	{
		$resData = new reservationData() ;
		$i = 0;
		$tab_res[0] = null; 
		foreach ($resData->get_reservations_intervalle($id, $date_debut, $date_fin) as $uneRes) 
		{
			$tab_res[$i] = new reservation(
				$uneRes["id_utilisateur"],
				$uneRes["id_salle"],
				$uneRes["debut_reservation"],
				$uneRes["fin_reservation"],
				$uneRes["est_facultatif"],
				$uneRes["description"],
				$uneRes["est_invite"]
			) ;
			$i++;
		}
		return $tab_res ;
	}

	public function get_reservations_invites($id_salle, $debut, $fin)
	{
		$resData = new reservationData() ;
		$i = 0;
		$tab_res[0] = null; 
		foreach ($resData->get_reservations_invites($id_salle, $debut, $fin) as $uneRes) 
		{
			$tab_res[$i] = new reservation(
				$uneRes["id_utilisateur"],
				$uneRes["id_salle"],
				$uneRes["debut_reservation"],
				$uneRes["fin_reservation"],
				$uneRes["est_facultatif"],
				$uneRes["description"],
				$uneRes["est_invite"]
			) ;
			$i++;
		}
		return $tab_res ;
	}


	// Création d'une reservation
	public function create_reservation($id_user , $id_salle , $debut , $fin , $est_facultatif , $description)
	{
		$resData = new reservationData() ;
		return $resData->create_reservation($id_user , $id_salle , $debut , $fin , $est_facultatif , $description);
	}



	//Vérification de la disponibilité d'une réservation selon la salle et l'utilisateur
	public function verif_possibilite_reservation($id_user, $id_salle, $debut_reservation, $fin_reservation)
	{
		$resData = new reservationData() ;
		$getResData = $resData->verif_possibilite_reservation($id_user, $id_salle, $debut_reservation, $fin_reservation) ;
		if(sizeof($getResData)>0)
		{
			$i = 0 ;
			$salleNonDispo = null;
			$tab_res[0] = null;
			foreach ($getResData as $uneRes) 
			{
				$tab_res[$i] = new reservation(
					$uneRes["id_utilisateur"],	
					$uneRes["id_salle"],
					$uneRes["debut_reservation"],
					$uneRes["fin_reservation"],
					$uneRes["est_facultatif"],
					$uneRes["description"],
					$uneRes["est_invite"]
				) ;
				if($uneRes["id_salle"] == $id_salle)
				{
					$salleNonDispo = "Cette salle est déjà réservée pour ce créneau horraire.";
				}
				if($uneRes["id_utilisateur"] == $id_user)
				{
					return "Vous avez déjà une réservation pour ce créneau horraire.";
				}
				$i++;
			}
			return $salleNonDispo;
		}
		return null;
	}

	public function update_reservation($id_user , $id_salle , $debut , $fin , $est_facultatif , $description, $est_invite)
	{
		
	}
}


$resM = new reservation_metier();
echo($resM->verif_possibilite_reservation(1,1,"2018-04-01 10:00:00","2018-04-01 11:00:00"));

//for($i = 1; $i<=9;$i++)
//{
//	echo("Salle ".$i." : ");
	?>
	<!--</br>-->
	<?php
//	$res = $resM->get_reservations_by_id_salle($i);
//	if($res[0] != null)
//	{
//		foreach ($res as $r) 
//		{
//			echo($r->get_id_utilisateur()." | ".$r->get_id_salle()." | ".$r->	//get_debut_reservation()." | ".$r->get_fin_reservation()." | ".$r->	//get_est_facultatif()." | ".$r->	get_description()." | ") ;
			?>
			 <!--</br></br>-->
			<?php
//		}
//	}
//	else
//	{
//		echo("Aucune reservation");
		?>
			<!--</br></br>-->
		<?php
//	}
//}
?>