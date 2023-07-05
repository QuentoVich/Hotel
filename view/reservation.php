<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Votre reservation</title>
    <link href="./style.reservation.css" rel="stylesheet">
</head>

<body>
    <section>

        <form class="form" action="../ctrl/ajoutReservation.php" method="post">
            <div id='titre'>
                <h1>MA <br> RESERVATION</h1>
            </div>

            <DIV id="corps_form">

                <div>
                    <label for="chambre">Chambre :</label>
                    <input type="text" name="chambre" id="chambre" required>
                </div>

                <div>
                    <label for="description">Description :</label>
                    <textarea name="description" id="description" readonly></textarea>
                </div>

                <div>
                    <!-- readonly -->
                    <label for="prix">Prix :</label>
                    <?php ?>
                    <input type="text" name="prix" id="prix" required>
                </div>

                <div>
                    <label for="date_debut">Date de début :</label>
                    <input type="date" id="date_debut" name="date_debut" required>
                </div>

                <div>
                    <label for="date_fin">Date de fin :</label>
                    <input type="date" id="date_fin" name="date_fin" required>
                </div>

                <div>
                    <label for="Code_Client">Code  client :</label>
                    <input type="int" name="Code_Client" id="Code_Client" required>
                </div>

                <div>
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom" required>
                </div>

        
                <input type="hidden" name="id_chambre" value="<?php echo $id_chambre; ?>">

                <input type="submit" id="submit" name="submit" value="Reserver">
            </DIV>
        </form>

    </section>





</body>

</html>