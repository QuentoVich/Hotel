<!DOCTYPE html>
<html lang="en">
<head>
  <title>Chambres disponibles</title>
</head>
<body>
  <h1>Chambres disponibles</h1>

  <form action="/view/recherche.php" method="post">
    <label for="categorie">Catégorie :</label>
    <select name="categorie" id="categorie">
      <option value="">Toutes les catégories</option>
      <option value="1">Suite</option>
      <option value="2">Cambre Double</option>
      <option value="3">Chambre Simple</option>
    </select>
    <br><br>
    <input type="submit" name="submit" value="Afficher les chambres disponibles">
  </form>
</body>
</html>