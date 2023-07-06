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
    <h1>Chambres disponibles</h1>

    <?php if (!empty($availableRooms)) : ?>
        <section class="chambres">
            <h1>Chambres disponibles</h1>
            <?php foreach ($availableRooms as $room) : ?>
                <tr>
                    <td><?php echo $room['Num_Chamb']; ?></td>
                    <td><?php echo $room['etage']; ?></td>
                    <td><?php echo $room['prix']; ?></td>
                    <td><?php echo $room['emplacement']; ?></td>
                    <td><?php echo $room['désignation']; ?></td>
                </tr>
            <?php endforeach; ?>
        </section>
    <?php else : ?>
        <p>Aucune chambre disponible pour les critères sélectionnés.</p>
    <?php endif; ?>
</body>
</html>