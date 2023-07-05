<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chambres disponibles</title>
</head>
<body>
    <h1>Chambres disponibles</h1>

    <?php if (!empty($availableRooms)) : ?>
        <table>
            <tr>
                <th>Numéro de chambre</th>
                <th>Étage</th>
                <th>Prix</th>
                <th>Emplacement</th>
                <th>Catégorie</th>
            </tr>
            <?php foreach ($availableRooms as $room) : ?>
                <tr>
                    <td><?php echo $room['Num_Chamb']; ?></td>
                    <td><?php echo $room['etage']; ?></td>
                    <td><?php echo $room['prix']; ?></td>
                    <td><?php echo $room['emplacement']; ?></td>
                    <td><?php echo $room['désignation']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else : ?>
        <p>Aucune chambre disponible pour les critères sélectionnés.</p>
    <?php endif; ?>
</body>
</html>
