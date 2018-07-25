// TOUTES LES RESAS


if(Date('D')=="Mon"){
    $dateLundi = Date('Y-m-d');
  }else{
    $dateLundi = Date('Y-m-d',strtotime("last Monday"));
  }

  if(Date('D')=="Fri"){
    $dateVendredi = Date('Y-m-d');
  }else{
    $dateVendredi = Date('Y-m-d',strtotime("next Friday"));
  }
  $reservationMetier = new reservation_metier();
  $reservations = $reservationMetier->get_reservations_intervalle($dateLundi, $dateVendredi);




foreach ($reservations as $uneReservation) 
                {
                  if(DATE('d',strtotime($uneReservation->get_debut_reservation()))==DATE('d',strtotime($dateLundi)) && DATE('H',strtotime($uneReservation->get_debut_reservation()))=="08")
                  {
                    echo "Réserver par ".($utilisateurMetier->get_utilisateur_by_id($uneReservation->get_id_utilisateur())->get_prenom_utilisateur())." ".($utilisateurMetier->get_utilisateur_by_id($uneReservation->get_id_utilisateur()))->get_nom_utilisateur()."<BR>";
                    echo ($salleMetier->get_salle_by_id($uneReservation->get_id_salle()))->get_nom_salle()."<BR>";
                    $countResa++;
                  }
                }
                if ($countResa == 0) 
                {
                  echo"Aucune réservation";
                }


