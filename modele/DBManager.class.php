<?php

	class DBManager
    {   private $bdd;

        //constructeur qui initialise la connxion à la BDD
        public function __construct()
        {
           $this->bdd = new PDO('mysql:host=localhost;dbname=hotel;charset=utf8mb4', 'root', '');
        }

        //Methode qui renvoie la liste des employés
	    public function connexionUtilisateur() : void
        {
           
            if (isset($_POST['submit'])) 
            { 
                $id = $_POST ['id'];
                $mdp = $_POST ['mdp'];

                $db = new PDO ('mysql:host=localhost;dbname=hotel;charset=utf8mb4', 'root', '');

                $sql = "SELECT * FROM utilisateur where Login = '$id' and mot_De_Passe = '$mdp'";
                $result = $db->prepare($sql);
                $result->execute();

            if ($result->rowCount() > 0)

            {
                $bdd = $result->fetchAll();

            if (password_verify($mdp, $bdd["mot_De_Passe"]))
            
            {
                echo "Connexion effectuée, bien ouej Leïla !";
                $_SESSION["Login"] = $id;
            }
    
            }
            }
        }
    }

?>
   
  

        // //methode qui supprime un employe par son noemp
        // public function supprEmploye($noemp) : void {

        // }

        // //methode qui mets à jour le salaire d'un amployé
        // public function updateSalaireEmploye($noemp, $sal) : void {

        // }



