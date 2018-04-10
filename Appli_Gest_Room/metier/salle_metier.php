<?php
include("salle.php");
include("donnees/salle.data.php");

class salle_metier
{

	public function get_salles()
	{
		$salleData = new salleData();
		$i = 0;
		foreach ($salleData->get_salles() as $uneSalle) 
		{
			$tab_salles[$i] = new salle(
				$uneSalle["id_salle"],
				$uneSalle["nom_salle"],
				$uneSalle["disponibilite_salle"]
			);
			$i++;
		}
		return $tab_salles ;
	}


	public function get_salle_by_id($id)
	{
		$salleData = new salleData();
		$salleArray = $salleData->get_salle_by_id($id);
		$salle = new salle
		(
			$salleArray["id_salle"],
			$salleArray["nom_salle"],
			$salleArray["disponibilite_salle"]
		);
		return $salle ;
	}


	public function  get_salles_disponible($estDispo)
	{
		$salleData = new salleData($estDispo);
		$i = 0;
		foreach ($salleData->get_salles_disponible($estDispo) as $uneSalle) 
		{
			$tab_salles[$i] = new salle(
				$uneSalle["id_salle"],
				$uneSalle["nom_salle"],
				$uneSalle["disponibilite_salle"]
			);
			$i++;
		}
		return $tab_salles ;
	}
}

$salleM = new salle_metier();
$salles = $salleM->get_salles_disponible(1);
foreach ($salles as $uneSalle) 
{
	echo($uneSalle->get_id_salle()." | ".$uneSalle->get_nom_salle()." | ".$uneSalle->get_disponibilite_salle()); ?></br><?php
}

?>