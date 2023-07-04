<!DOCTYPE html>
<html lang="en">

<head>
  <title>Chambres disponibles</title>
  <link href="./style.recherche.css" rel="stylesheet">
</head>

<body>
  <DIV class="titre">
    <h1>Que souhaitez-vous ? </h1>
  </DIV>



  <div class="formulaire">

    <div id="chambres">
    <form action="../ctrl/listChambres.php" method="post">
      <label for="categorie">Catégorie :</label>
      <select name="categorie" id="categorie">
        <option value="">Toutes les catégories</option>
        <option value="1">Suite</option>
        <option value="2">Chambre Double</option>
        <option value="3">Chambre Simple</option>
      </select>

      <div>
        <label for="date_debut">Date de début :</label>
        <input type="date" id="date_debut" name="date_debut" required>
      </div>

      <div>
        <label for="date_fin">Date de fin :</label>
        <input type="date" id="date_fin" name="date_fin" required>
      </div>

      <br><br>
      <input type="submit" name="submit" value="Afficher les chambres disponibles">
    </form>
  </div>
</body>

</html>