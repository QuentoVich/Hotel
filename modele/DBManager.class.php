<?php

class DBManager
{
    private $bdd;
    // private static $count_reservation = 1;


    //constructeur qui initialise la connxion à la BDD
    public function __construct()
    {
        $this->bdd = new PDO('mysql:host=localhost;dbname=hotel;charset=utf8', 'root', '');
    }


    //methode qui ajoute une reservation

    public function setReservation($date_Reservation, $date_Entree, $date_Sortie, $Code_Client, $Num_Chamb): void
    {
        $sql = "INSERT INTO reservation (date_Reservation, date_Entrée, date_Sortie, Code_Client, Num_Chamb) 
            VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->bdd->prepare($sql);
        $stmt->execute([$date_Reservation, $date_Entree, $date_Sortie, $Code_Client, $Num_Chamb]);

        // Récupérer le numéro max de réservation généré automatiquement
        $sql = "SELECT MAX(num_Reservation) FROM reservation";
        $stmt = $this->bdd->query($sql);
        $num_Reservation = $stmt->fetchColumn();

        // Afficher le numéro de réservation
        echo "Réservation effectuée avec succès !\nNuméro de réservation : " . $num_Reservation;
        header("Location:../view/recherche.php");
    }

    public function connexionUtilisateur(): void
    {

        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $mdp = $_POST['mdp'];

            $db = new PDO('mysql:host=localhost;dbname=hotel;charset=utf8mb4', 'root', '');

            $sql = "SELECT * FROM utilisateur where Login = '$id' and mot_De_Passe = '$mdp'";
            $result = $db->prepare($sql);
            $result->execute();

            if ($result->rowCount() > 0) {
                $db = $result->fetchAll();
                $mdp = hash('sha256', $mdp);

                if ($mdp === $mdp) {
                    header('Location:../view/recherche.php');
                    $_SESSION["Login"] = $id;
                }
            } else header('Location:../view/connexion.php?error_id=Identifiants incorrects, veuillez vérifier vos informations de connexion');
        }
    }



    public function getAvailableRooms($categorie, $dateEntree, $dateSortie)
    {
        // Requête pour récupérer les chambres disponibles
        $sql = "SELECT chambre.Num_Chamb, chambre.etage, chambre.prix, chambre.emplacement, categorie.désignation
                FROM chambre
                INNER JOIN categorie ON chambre.Code_Categorie = categorie.Code_Categorie
                WHERE chambre.Code_Categorie = :categorie
                AND chambre.Num_Chamb NOT IN (
                    SELECT Num_Chamb FROM reservation
                    WHERE (date_Entrée BETWEEN :dateEntree AND :dateSortie)
                    OR (date_Sortie BETWEEN :dateEntree AND :dateSortie)
                    
                )ORDER BY chambre.prix ASC";

        // Préparer la requête
        $stmt = $this->bdd->prepare($sql);

        // Bind des paramètres
        $stmt->bindParam(':categorie', $categorie);
        $stmt->bindParam(':dateEntree', $dateEntree);
        $stmt->bindParam(':dateSortie', $dateSortie);

        // Exécuter la requête
        $stmt->execute();

        // Récupérer les résultats
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}
