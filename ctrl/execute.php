
<?php

session_start();

// include "../M/DBManager.class.php";

// $client = new DBManager();


// $id = $_POST['prenom'];
// $prenom = $_POST['nom'];
// $sex = $_POST['sex']; 

// $db->insertEmploye($nom, $prenom, $sex);

// //print_r($db->selectListeEmploye());


if (isset($_POST['submit'])) 
{ 
    $id = $_POST ['id'];
    $mdp = $_POST ['mdp'];

    $db = new PDO ('mysql:host=localhost;dbname=hotel;charset=utf8mb4', 'root', '');

    $sql = "SELECT * FROM utilisateur where Login = '$id' ";
    $result = $db->prepare($sql);
    $result->execute();

    if ($result->rowCount() > 0)
    {
        $data = $result->fetchAll();
        if (password_verify($mdp, $data[$i], ["mot_De_Passe"]))
        {
            echo "Connexion effectuée, bien ouej Leïla !";
            $_SESSION["Login"] = $id;
        }
    }

}







$db = new DBManager();


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

$db -> setReservation($date_Reservation , $date_Entree , $date_Sortie , $Code_Client , $Num_Chamb);






?>