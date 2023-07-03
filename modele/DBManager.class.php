<?php

	class DBManager
    {   private $bdd;
        private static $count_reservation = 1;
       

        //constructeur qui initialise la connxion à la BDD
        public function __construct()
        {
            $this->bdd = new PDO('mysql:host=localhost; dbname=hotel; charset=utf8', 'root', '');

        }

        //Methode qui renvoie la liste des employés
	    // public function selectListeEmploye() : array
        // {
        //     $stmt= $this->bdd->prepare("SELECT * FROM `client`; ");
        //     $stmt->execute();
        //     $listEmploi = $stmt->fetchAll();
        //     return $listEmploi;
        // }

   
        //methode qui ajoute une reservation
      
        public function setReservation($date_Reservation, $date_Entrée, $date_Sortie, $Code_Client, $Num_Chamb): void {
            $num_Reservation = self::$count_reservation++;

            $sql = "INSERT INTO reservation (num_Reservation , date_Reservation, date_Entrée, date_Sortie, Code_Client, Num_Chamb) VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->bdd->prepare($sql);
            $stmt->execute([$num_Reservation, $date_Reservation, $date_Entrée, $date_Sortie, $Code_Client, $Num_Chamb]);
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
        public function getCount_reservation()
        {
                return $this->count_reservation;
        }

        /**
         * Set the value of count_reservation
         *
         * @return  self
         */ 
        public function setCount_reservation($count_reservation)
        {
                $this->count_reservation = $count_reservation;

                return $this;
        }

     
    }



?>