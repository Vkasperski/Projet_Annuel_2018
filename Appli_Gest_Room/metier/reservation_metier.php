<?php
include("reservation.php");
include("donnees/reservation.data.php");

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
				$uneRes["description"]
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
				$uneRes["description"]
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
				$uneRes["description"]
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
}


$resM = new reservation_metier();
echo($resM->create_reservation(1,1,"2018-07-13 08:00:00","2018-07-13 10:00:00",0,"new test creation"));

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