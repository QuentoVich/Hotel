

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <link href="./style.connexion.css" rel="stylesheet">
</head>

<header>
    <nav>
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
            <div>
                <ul>
                    <li><a href="#" alt="Réserver" target="_blank">Réserver</a></li>
                </ul>
            </div>
        </div>
        <div id="element2">
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
    <form class="form" action="../ctrl/authentification.php" method="POST">
        <div id="titre">
            <h1>Connexion</h1>
        </div>
        <DIV id = "corps_form">
        <div class="element">
            <label for="id">Identifiant : </label>
            <input id="id" name="id" type="text" placeholder="Entrez votre identifiant" />
        </div>
        <div class="element">
            <label for="mdp">Mot de passe : </label>
            <input id="mdp" name="mdp" type="password" placeholder="Entrez votre mot de passe" required />
        </div>
        <?php
if (isset($_GET ['error_mdp'])) { ?>
    <p class = "error"><?php echo $_GET['error_mdp']; ?> </p>
<?php } ;
if (isset($_GET ['error_id'])) { ?>
    <p class = "error"><?php echo $_GET['error_id']; ?> </p>
<?php } ?>



        <input type="submit" id="submit" name="submit" value="Envoyer" />
        </DIV>
    </form>
</body>
</html>