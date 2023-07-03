<?php

	class DBManager
    {   private $bdd;
        private static $count_reservation;
        private $num_Reservation;

        //constructeur qui initialise la connxion à la BDD
        public function __construct()
        {
           $this->bdd = new PDO('mysql:host=localhost;dbname=hotel;charset=utf8mb4', 'root', '');
        }

        //Methode qui renvoie la liste des employés
	    public function selectListeEmploye() : array
        {
            $stmt= $this->bdd->prepare("SELECT * FROM `client`; ");
            $stmt->execute();
            $listEmploi = $stmt->fetchAll();
            return $listEmploi;
        }

   
        //methode qui ajoute une reservation
        public function setReservation($date, $surname, $tel) : void { 
            $this->num_Reservation = self::$count_reservation++;   

            $sql = "INSERT INTO reservation (date_Reservation, nom, sex) VALUES (?,?,?)";
            $stmt= $this->bdd->prepare($sql);
            $stmt->execute([$date, $surname, $tel]);
        
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

        /**
         * Get the value of num_Reservation
         */ 
        public function getNum_Reservation()
        {
                return $this->num_Reservation;
        }

        /**
         * Set the value of num_Reservation
         *
         * @return  self
         */ 
        public function setNum_Reservation($num_Reservation)
        {
                $this->num_Reservation = $num_Reservation;

                return $this;
        }
    }



?>