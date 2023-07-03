<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste chambres dispo</title>
</head>
<body>
<?php
  // Connexion à la base de données
  $bdd = new DBManager();

  // Vérification de la connexion
  if (mysqli_connect_errno()) {
    echo "Erreur de connexion à la base de données: " . mysqli_connect_error();
  }

  // Traitement du formulaire
  if (isset($_POST['submit'])) {
    $categorie = $_POST['categorie'];

    $query = "SELECT * FROM chambre";

    if (!empty($categorie)) {
      $query .= " WHERE Code_Categorie = '$categorie'";
    }

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
      echo "<h2>Résultats de la recherche :</h2>";
      echo "<table>";
      echo "<tr><th>Numéro de chambre</th><th>Étage</th><th>Prix</th><th>Emplacement</th><th>Catégorie</th></tr>";

      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['Num_Chamb'] . "</td>";
        echo "<td>" . $row['etage'] . "</td>";
        echo "<td>" . $row['prix'] . "</td>";
        echo "<td>" . $row['emplacement'] . "</td>";
        echo "<td>" . $row['Code_Categorie'] . "</td>";
        echo "</tr>";
      }

      echo "</table>";
    } else {
      echo "Aucune chambre disponible.";
    }

    mysqli_close($conn);

    //Methode qui renvoie la liste des employés
    public function selectListeChambre() : array
    {
        $stmt= $this->bdd->prepare("SELECT * FROM chambre");
        $stmt->execute();
        $listChambre = $stmt->fetchAll();
        return $listChambre;
    }
  }

  
  ?>
  
</body>
</html>