<?php
include "./modele/DBManager.class.php";

$db = new DBManager();


$nom = $_POST['date_Reservation'];
$prenom = $_POST['nom'];
$tel = $_POST['tel']; 

$db->setReservation($nom, $prenom, $sex);
