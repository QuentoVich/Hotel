<?php
include "../modele/DBManager.class.php";

$db = new DBManager();


// Supposons que vous avez déjà instancié votre modèle dans une variable $modele

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $date_Reservation = date('Y-m-d');
    $date_Entree = $_POST['date_debut'];
    $date_Sortie = $_POST['date_fin'];
    $Code_Client = $_POST['nom'];
    $Num_Chamb = $_POST['id_chambre'];

    // Obtenir le prochain numéro de réservation
    $num_Reservation = $modele->getNextReservationNumber();

    // Effectuer une réservation avec le numéro de réservation
    $modele->setReservation($num_Reservation, $date_Reservation, $date_Entree, $date_Sortie, $Code_Client, $Num_Chamb);

    // Afficher le numéro de réservation
    echo "Numéro de réservation : " . $num_Reservation;
}
