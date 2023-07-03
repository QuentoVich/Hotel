
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
?>