<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chambres disponibles</title>
    <link href="./style.chambre.css" rel="stylesheet">
</head>

<body>
    <h1>Chambres disponibles</h1>

    <?php
    $availableRooms = [];
    if (isset($_GET['rooms'])) {
        $availableRooms = unserialize(urldecode($_GET['rooms']));
    }
    ?>

    <?php if (!empty($availableRooms)) : ?>
        <section class="chambres">
          
            <?php foreach ($availableRooms as $room) : ?>
                <section class = "carte_chambre">
                    <div>
                        <h3>Numéro de chambre</h3>
                        <?php echo $room['Num_Chamb']; ?>
                    </div>
                    <div>
                        <h3>Étage</h3>
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
                    <div>
                    <td><a href="../view/reservation.php?chambre=<?php echo $room['Num_Chamb']; ?>&prix=<?php echo $room['prix']; ?>&emplacement=<?php echo $room['emplacement']; ?>">Réserver</a></td>
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