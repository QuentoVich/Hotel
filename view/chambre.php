git <!DOCTYPE html>
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