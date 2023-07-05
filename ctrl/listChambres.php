<?php
include "../modele/DBManager.class.php";
$db = new DBManager();



// try {
//     $db = new PDO("mysql:host=$host;dbname=$dbhotel;charset=utf8", $username, $password);

//     // Récupération des chambres disponibles
//     $query = "SELECT c.Num_Chamb, c.etage, c.prix, c.emplacement, cat.désignation AS categorie
//                       FROM chambre c
//                       INNER JOIN categorie cat ON c.Code_Categorie = cat.Code_Categorie";
//     $stmt = $db->query($query);

//     while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//         echo "<tr>";
//         echo "<td>" . $row['Num_Chamb'] . "</td>";
//         echo "<td>" . $row['etage'] . "</td>";
//         echo "<td>" . $row['prix'] . "</td>";
//         echo "<td>" . $row['emplacement'] . "</td>";
//         echo "<td>" . $row['categorie'] . "</td>";
//         echo "</tr>";
//     }

//     // Fermeture de la connexion à la base de données
//     $db = null;
// } catch (PDOException $e) {
//     echo "Erreur : " . $e->getMessage();
// }





// Vérification si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des valeurs du formulaire
    $categorie = $_POST['categorie'];
    $_SESSION['DATEDEBUT'] = $_POST['date_debut'];
    $_SESSION['DATEFIN'] = $_POST['date_fin'];

    print_r($_POST['date_debut']);
   
    // Obtention des chambres disponibles
    $availableRooms = $db->getAvailableRooms($categorie, $dateDebut, $dateFin);

    // Affichage de la vue avec les chambres disponibles
    //include '../view/chambre.php';
} else {
    // Affichage du formulaire de réservation
   // include '../view/recherche.php';
}


        // Ligne pour recuperer le numero de chambre et le prix dans le formulaire de reservation avec un bouton reserver : 

        /* <a href="reservation.php?chambre=<?php echo $numero_chambre; ?>&prix=<?php echo $prix_chambre; ?>">Réserver</a>*/
