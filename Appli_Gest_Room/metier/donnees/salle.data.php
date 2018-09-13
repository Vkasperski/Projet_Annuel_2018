<?php
include("connexion_bdd.php");

class salleData 
{
	public function get_salles()
	{
		$req = $GLOBALS["bdd"]->prepare("call getSalles()");
		$req->execute(array());
		$salles = array();
		$i = 0;
		while ( $datas = $req->fetch())
		{
			$salles[$i] = array
			(
				"id_salle" => $datas["id_salle"],
				"nom_salle" => $datas["nom_salle"],
				"disponibilite_salle" => $datas["disponibilite_salle"],
				"description_salle" => $datas["description_salle"]
			);
			$i++;
		}
		return $salles ;
	}

	public function get_salle_by_id($id)
	{
		$req = $GLOBALS["bdd"]->prepare("call getSalleById(?)");
		$req->execute(array($id));
		$data = $req->fetch();
		$salle = array
		(
			"id_salle" => $data["id_salle"],
			"nom_salle" => $data["nom_salle"],
			"disponibilite_salle" => $data["disponibilite_salle"],
			"description_salle" => $data["description_salle"]
		);
		return $salle ;
	}

	public function get_salles_disponible($estDispo)
	{
		$req = $GLOBALS["bdd"]->prepare("call getSalleDisponnible(?)");
		$req->execute(array($estDispo));
		$salles = array();
		$i = 0;
		while ( $datas = $req->fetch())
		{
			$salles[$i] = array
			(
				"id_salle" => $datas["id_salle"],
				"nom_salle" => $datas["nom_salle"],
				"disponibilite_salle" => $datas["disponibilite_salle"],
				"description_salle" => $datas["description_salle"]
			);
			$i++;
		}
		return $salles ;
	}

	public function create_salle($nom, $disponibilite, $descriptif)
	{
		$req  = $GLOBALS["bdd"]->prepare("call createSalle(?,?,?)");
		return $req->execute(array($nom,$disponibilite, $descriptif));
	}

	public function update_salle($id, $nom, $disponibilite, $descriptif)
	{
		$req  = $GLOBALS["bdd"]->prepare("call updateSalle(?,?,?,?)");
		return $req->execute(array($id,$nom,$disponibilite, $descriptif));
	}

	public function delete_salle($id)
	{
		$req = $GLOBALS["bdd"]->prepare("call deleteSalle(?)");
		return $req->execute(array($id));
	}
}
?>