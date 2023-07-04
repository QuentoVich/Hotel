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
    }






    // //methode qui supprime un employe par son noemp
    // public function supprEmploye($noemp) : void {

    // }

    // //methode qui mets à jour le salaire d'un amployé
    // public function updateSalaireEmploye($noemp, $sal) : void {

    // }


    /**
     * Get the value of count_reservation
     */
    // public function getCount_reservation()
    // {
    //         return $this->count_reservation;
    // }

    // /**
    //  * Set the value of count_reservation
    //  *
    //  * @return  self
    //  */ 
    // public function setCount_reservation($count_reservation)
    // {
    //         $this->count_reservation = $count_reservation;

    //         return $this;
    // }


}
