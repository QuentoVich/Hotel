<?php
include "../modele/DBManager.class.php";
$db = new DBManager();





// Vérification si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des valeurs du formulaire
    $categorie = $_POST['categorie'];
    $_SESSION['DATEDEBUT'] = $_POST['date_debut'];
    $_SESSION['DATEFIN'] = $_POST['date_fin'];


    // Obtention des chambres disponibles
    $availableRooms = $db->getAvailableRooms($categorie, $dateDebut, $dateFin);


    header('Location: ../view/chambre.php?rooms=' . urlencode(serialize($availableRooms)));
    include '../view/chambre.php';
} else {
    header('Location:../view/recherche.php');
    include '../view/recherche.php';
}


        // Ligne pour recuperer le numero de chambre et le prix dans le formulaire de reservation avec un bouton reserver : 

        /* <a href="reservation.php?chambre=<?php echo $numero_chambre; ?>&prix=<?php echo $prix_chambre; ?>">Réserver</a>*/
