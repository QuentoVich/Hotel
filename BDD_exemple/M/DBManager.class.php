<?php

	class DBManager
    {   private $bdd;

        //constructeur qui initialise la connexion à la BDD
        public function __construct()
        {
           $this->bdd = new PDO('mysql:host=localhost;dbname=hotel;charset=utf8bin', 'root', '');
        }

        //Methode qui renvoie la liste des utilisateurs
	    public function selectListeEmploye() : array
        {
            $stmt= $this->bdd->prepare("SELECT * FROM `utilisateur`; ");
            $stmt->execute();
            $listUtilisateur = $stmt->fetchAll();

        }

   
        //methode qui vérifie le login et mot de passe existe
        public function verifUtilisateur($id, $mdp) : void {   

        {
            $stmt= $this->bdd->prepare("SELECT * FROM `utilisateur`; ");
            $stmt->execute();
            $listUtilisateur = $stmt->fetchAll();
    
        }
            
        if ( !isset($_POST['id'], $_POST['mdp']) ) {
        // Could not get the data that should have been sent.
        exit('Please fill both the username and password fields!');
        }

         if ($_POST['Login'] === $id) {
            $sql = SELECT * FROM `utilisateur`
            # code...
         }
        
        }

        // //methode qui supprime un employe par son noemp
        // public function supprEmploye($noemp) : void {

        // }

        // //methode qui mets à jour le salaire d'un amployé
        // public function updateSalaireEmploye($noemp, $sal) : void {

        // }

    }



?>