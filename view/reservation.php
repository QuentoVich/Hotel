<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Votre reservation</title>
       <link href="./style.reservation.css" rel="stylesheet">
    </head>
    <body>
        <form class="form" action="../C/execute.ctrl.php" method="post" >

        <h1>RESERVATION</h1>
            <div class="">
                <label for="date_debut">Date de début :</label>
                <input type="date" id="date_debut" name="date_debut">
            </div>

            <div class="">
                <label for="date_fin">Date de fin :</label>
                <input type="date" id="date_fin" name="date_fin">
            </div>

            <div class="">
                <label for="prenom">Prénom : </label>
                <input id="prenom" name="prenom" type="text" />
            </div>

            <div class="">
                <label for="tel">Téléphone : </label>
                <input id="tel" name="tel" type="text" required min />
            </div>

            <input type="submit" id="submit" name="submit" value="Envoyer" />
        
        </form>

       


         <form id="reservationForm" action="traitement_reservation.php" method="post">

         <div class="">       
    <label for="chambre">Chambre :</label>
    <input type="text" name="chambre" id="chambre" value="<?php echo $nom_chambre; ?>" readonly>
         </div>

    <div class="">
    <label for="description">Description :</label>
    <textarea name="description" id="description" readonly><?php echo $description; ?></textarea>
    </div>

    <div class="">
    <label for="prix">Prix :</label>
    <input type="text" name="prix" id="prix" value="<?php echo $prix; ?>" readonly>
    </div>

        <div class="">
                <label for="date_debut">Date de début :</label>
                <input type="date" id="date_debut" name="date_debut">
            </div>

            <div class="">
                <label for="date_fin">Date de fin :</label>
                <input type="date" id="date_fin" name="date_fin">
            </div>

    <div class="">
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" required>
    </div>

    <div class="">
    <label for="telephone">Téléphone :</label>
    <input type="text" name="telephone" id="telephone" required>

    </div>
    <input type="hidden" name="id_chambre" value="<?php echo $id_chambre; ?>">

    <input type="submit" id="submit" name="submit" value="Reserver" />
</form>
    </body>
</html>