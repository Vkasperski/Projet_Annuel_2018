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

	public function create_salle($nom, $disponibilite)
	{
		$salleData = new salleData();
		return $salleData->create_salle($nom,$disponibilite);
	}

	public function update_salle($id, $nom, $disponibilite)
	{
		$salleData = new salleData();
		return $salleData->update_salle($id, $nom, $disponibilite);
	}

	public function delete_salle($id)
	{
		$salleData = new salleData();
		return $salleData->delete_salle($id);
	}
}

$salleM = new salle_metier();
$salleM->update_salle(1,"salle 1", true); 
$salles = $salleM->get_salles();
foreach ($salles as $uneSalle) 
{
	echo($uneSalle->get_id_salle()." | ".$uneSalle->get_nom_salle()." | ".$uneSalle->get_disponibilite_salle()); ?></br><?php
}

?>