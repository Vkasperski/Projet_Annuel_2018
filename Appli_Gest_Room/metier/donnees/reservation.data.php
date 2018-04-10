<?php

class reservationData 
{

	public function get_reservations()
	{
		$req = $GLOBALS["bdd"]->prepare("call get");
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
				"description" => $datas["description"]
			);
			$i++;		
		}
		return $reservations;
	}
}

?>