<?php

session_start();

include "../modele/DBManager.class.php";

$db = new DBManager();

$id = $_POST['id'];
$mdp = $_POST['mdp'];

$db->connexionUtilisateur();


?>