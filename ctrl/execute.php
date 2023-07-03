<?php

include "../M/DBManager.class.php";

$db = new DBManager();


$nom = $_POST['prenom'];
$prenom = $_POST['nom'];
$sex = $_POST['sex']; 

$db->insertEmploye($nom, $prenom, $sex);

//print_r($db->selectListeEmploye());
?>