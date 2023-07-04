<?php
$catégorie = $_POST['catégorie'];
$dateDébut = $_POST['date_début'];
$dateFin = $_POST['date_fin'];

$sql = "SELECT * FROM chambres WHERE catégorie = :catégorie AND chambre_id NOT IN (
    SELECT chambre_id FROM réservations WHERE date_début <= :dateFin AND date_fin >= :dateDébut
)";
$stmt = $bdd->prepare($sql);
$stmt->bindParam(':catégorie', $catégorie);
$stmt->bindParam(':dateDébut', $dateDébut);
$stmt->bindParam(':dateFin', $dateFin);
$stmt->execute();
$resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);

