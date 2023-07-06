<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chambres disponibles</title>
    <link href="./style.chambre.css" rel="stylesheet">
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


<body>


    <?php
    $availableRooms = [];
    if (isset($_GET['rooms'])) {
        $availableRooms = unserialize(urldecode($_GET['rooms']));
    }
    ?>

    <?php if (!empty($availableRooms)) : ?>
        <section class="chambres">
            <h1>Chambres disponibles</h1>
            <?php foreach ($availableRooms as $room) : ?>
                <section class="carte_chambre">
                    <div class="info_chambre">

                        <div>
                            <div class="h3">
                                <h3>Numéro de chambre</h3>
                                <?php echo $room['Num_Chamb']; ?>
                            </div>
                        </div>
                        <div>
                            <div class="h3">
                                <h3>Étage</h3>
                            </div>
                            <?php echo $room['etage']; ?>
                        </div>
                        <div>
                            <h3>Prix</h3>
                            <?php echo $room['prix']; ?>
                        </div>
                        <div>
                            <h3>Emplacement</h3>
                            <?php echo $room['emplacement']; ?>
                        </div>
                        <div>
                            <h3>Catégorie</h3>
                            <?php echo $room['désignation']; ?>
                        </div>
                        <div class="bouton_reservation">
                        <td><a href="../view/reservation.php?chambre=<?php echo $room['Num_Chamb']; ?>&prix=<?php echo $room['prix']; ?>&emplacement=<?php echo $room['emplacement']; ?>">Réserver</a></td>                        
                    </div>
                    </div>

                    </form>
                </section>
            <?php endforeach; ?>
        </section>
    <?php else : ?>
        <p>Aucune chambre disponible pour les critères sélectionnés.</p>
    <?php endif; ?>
</body>

</html>