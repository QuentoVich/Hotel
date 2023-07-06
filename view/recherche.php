<!DOCTYPE html>
<html lang="en">

<head>
  <title>Chambres disponibles</title>
  <link href="./style.recherche.css" rel="stylesheet">
</head>

<header>
    <nav>
    <div id="el_nav1">
        <div id="element1">

            <ul>
                <li>
                    <a href="#" alt="Toutes nos chambres" target="_blank">Nos chambres</a>
                    <ul>
                        <li><a href="#" alt="Chambre Simple" target="_blank">Chambre Simple</a></li>
                        <li><a href="#" alt="Chambre Double" target="_blank">Chambre Double</a></li>
                        <li><a href="#" alt="Suite" target="_blank">Suite</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div id="element2">
            <ul>
                <li><a href="#" alt="Réserver" target="_blank">Réserver</a></li>
            </ul>
        </div>
    </div>
            <div id="element3">
                <h1>Time <br> to <br> Travel</h1>
            </div>
        </div>
        <div id="element4">
            <ul>
                <li>
                    <a href="#" alt="Mon profil" target="_blank">Mon profil</a>
                    <ul>
                        <li><a href="#" alt="Mes réservations" target="_blank">Mes réservations</a></li>
                        <li><a href="#" alt="Mes informations" target="_blank">Mes informations</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

<body>
  <DIV class="titre">
    <h1> <?php

          session_start();

          $bienvenue = "Bonjour " . $_SESSION['Login'] . " !";

          echo $bienvenue;

          ?> <br><br>Que recherchez-vous ? </h1>
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

    <div id="deconnexion">
      <form action="connexion.php" method="post">
        <input type="submit" name="submit" value="Se déconnecter">
        <?php session_destroy(); ?>
      </form>
    </div>
</body>

</html>