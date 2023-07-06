<?php
include "../modele/DBManager.class.php";

$db = new DBManager();

$date_Reservation = date('Y-m-d');
$date_Entree = $_POST['date_debut'];
$date_Sortie = $_POST['date_fin'];
$Code_Client = $_POST['Code_Client'];
$Num_Chamb = $_POST['chambre'];

$db->setReservation($date_Reservation, $date_Entree, $date_Sortie, $Code_Client, $Num_Chamb);
// print_r($db->setReservation());







