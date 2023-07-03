<?php

	class DBManager
    {   private $bdd;

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

   
        //methode qui ajoute une personne
        public function insertEmploye($name, $surname, $sex) : void {       
            $sql = "INSERT INTO test (name, surname, sex) VALUES (?,?,?)";
            $stmt= $this->bdd->prepare($sql);
            $stmt->execute([$name, $surname, $sex]);
        
        }

        // //methode qui supprime un employe par son noemp
        // public function supprEmploye($noemp) : void {

        // }

        // //methode qui mets à jour le salaire d'un amployé
        // public function updateSalaireEmploye($noemp, $sal) : void {

        // }

    }



?>