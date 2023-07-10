<!DOCTYPE html>
<html lang="en">

<head>
  <title>Chambres disponibles</title>
  <link href="./style.recherche.css" rel="stylesheet">
</head>

<header>
<div id="logo">
  <div id="element3">
                <h1>Time <br> to <br> Travel</h1>
            </div> 
</div>
           
   
</header>

<body>
  <DIV class="titre">
    <h1> <?php

          session_start();

          $bienvenue = "Bonjour " . $_SESSION['Login'] . " !";

          echo $bienvenue;

          ?> <br><br>Que recherchez-vous ? </h1>
  </DIV>

 <div > <?php
        if (isset($_GET['resa'])) {?>

       <p class = "resa"> <?php echo $_GET['resa'];?></p>
      <?php } ?> 
        </div>

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

        <div class = "element_form">
          <label for="date_debut">Date de début :</label>
          <input type="date" id="date_debut" name="date_debut" required>
        </div>

        <div class = "element_form">
          <label for="date_fin">Date de fin :</label>
          <input type="date" id="date_fin" name="date_fin" required>
        </div>

        <br><br>
        <input type="submit" id="submit" name="submit" value="Afficher les chambres disponibles ">
      </form>
    </div>

</body>

</html>

    <div id="deconnexion">
      <form action="connexion.php" method="post">
        <input type="submit" name="submit" value="Se déconnecter">
        <?php session_destroy(); ?>
      </form>
    </div>
</body>

</html>