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
				$uneSalle["disponibilite_salle"],
				$uneSalle["description_salle"]
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
			$salleArray["disponibilite_salle"],
			$salleArray["description_salle"]
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
				$uneSalle["disponibilite_salle"],
				$uneSalle["descriptif_salle"]
			);
			$i++;
		}
		return $tab_salles ;
	}

	public function create_salle($nom, $disponibilite,$descriptif)
	{
		$salleData = new salleData();
		return $salleData->create_salle($nom,$disponibilite,$descriptif);
	}

	public function update_salle($id, $nom, $disponibilite,$descriptif)
	{
		$salleData = new salleData();
		return $salleData->update_salle($id, $nom, $disponibilite,$descriptif);
	}

	public function delete_salle($id)
	{
		$salleData = new salleData();
		return $salleData->delete_salle($id);
	}
}

?>