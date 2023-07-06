<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Votre reservation</title>
    <link href="./style.reservation.css" rel="stylesheet">
</head>


<header>
<div id="logo">
  <div id="element3">
                <h1>Time <br> to <br> Travel</h1>
            </div> 
</div>
           
    <nav>
    <div id="el_nav1">
        <div id="element1">

            <ul>
                <li>
                    <a href="#" alt="Toutes nos chambres" target="_blank">Nos chambres</a>
                    <ul>
                        <li><a href="#" alt="Chambre Simple" > Chambre Simple</a></li>
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
            
        </div>
        <div id="element4">
            <ul>
                <li>
                    <a href="#" alt="Mon profil" target="_blank">Mon profil</a>
                    <ul>
                        <li><a href="#" alt="Mes réservations" target="_blank">Mes réservations</a></li>
                        <li><a href="#" alt="Mes informations" target="_blank">Mes informations</a></li>
                        <li><a href="./connexion.php" alt="Deconnexion"  >Se deconnecter</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>


<?php session_start() ?>

<body>

    <section>

        <form class="form" action="../ctrl/ajoutReservation.php" method="post">
            <div id='titre'>
                <h1>MA <br> RESERVATION</h1>
            </div>


            <DIV id="corps_form">

            <div class="element_form">
                    <label for="chambre">Chambre :</label>
                    <input type="text" name="chambre" id="chambre" value="<?php echo $chambre = $_GET['chambre']; ?>" readonly>

                </div>


                <div class="element_form">
                    <label for="description">Description :</label>
                    <input type="text" name="description" id="description" value="<?php echo $_GET['emplacement']; ?>" readonly>

                </div>

                <div class="element_form">
                    <label for="prix">Prix par nuit :</label>
                    <input type="text" name="prix_par_jour" id="prix_par_jour" value="<?php echo $_GET['prix']; ?>" readonly>
                </div>

                <div class="element_form">
                    <label for="date_debut">Date de début :</label>
                    <input type="text" id="date_debut" name="date_debut" value="<?php echo $_SESSION['DATEDEBUT']; ?>" required>
                </div>

                <div class="element_form">
                    <label for="date_fin">Date de fin :</label>
                    <input type="text" id="date_fin" name="date_fin" value="<?php echo $_SESSION['DATEFIN']; ?>" required>
                </div>

                <div class="element_form">
                    <label for="Code_Client">Code client :</label>
                    <input type="int" name="Code_Client" id="Code_Client" required>
                </div>

              


                <input type="hidden" name="id_chambre" value="<?php echo $id_chambre; ?>">

                <input type="submit" id="submit" name="submit" value="Reserver">
            </DIV>
        </form>

    </section>





</body>


</html>