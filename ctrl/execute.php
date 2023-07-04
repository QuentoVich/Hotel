
<?php

session_start();

include "../modele/DBManager.class.php";

$db = new DBManager();

$id = $_POST['id'];
$mdp = $_POST['mdp'];

$db->connexionUtilisateur();

// include "../M/DBManager.class.php";

// $client = new DBManager();


// $id = $_POST['prenom'];
// $prenom = $_POST['nom'];
// $sex = $_POST['sex']; 

// $db->insertEmploye($nom, $prenom, $sex);

// //print_r($db->selectListeEmploye());











?>