<?php
include "../modele/DBManager.class.php";
$db = new DBManager();


session_start();


// // Vérification si le formulaire a été soumis
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Récupération des valeurs du formulaire
      $categorie = $_POST['categorie'];
       $_SESSION['DATEDEBUT'] = $_POST['date_debut'];
       $_SESSION['DATEFIN'] = $_POST['date_fin'];


//     // Obtention des chambres disponibles
    $availableRooms = $db->getAvailableRooms($categorie, $dateDebut, $dateFin);

//     // Affichage de la vue avec les chambres disponibles

    header('Location: ../view/chambre.php?rooms=' . urlencode(serialize($availableRooms)));
} else {
// Affichage du formulaire de réservation
    header('Location:../view/recherche.php');
}

function calculerNombreJours($dateDebut, $dateFin) {
    $diff = strtotime($dateFin) - strtotime($dateDebut);
    // $nombreJours = floor($diff / (60 * 60 * 24));
    

    return $diff;
}


echo $nombreJours;

function calculerPrixTotal($prixParJour, $dateDebut, $dateFin) {
    $nombreJours = calculerNombreJours($dateDebut, $dateFin);
    $prixTotal = $prixParJour * $nombreJours;
    return $prixTotal;
}

        // Ligne pour recuperer le numero de chambre et le prix dans le formulaire de reservation avec un bouton reserver : 

        /* <a href="reservation.php?chambre=<?php echo $numero_chambre; ?>&prix=<?php echo $prix_chambre; ?>">Réserver</a>*/
