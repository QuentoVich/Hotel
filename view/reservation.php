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
                <label for="date_Reservation">Date réservation : </label>
                <input id="date_Reservation" name="date_Reservation" type="date" />
            </div>
            <div class="">
                <label for="nom">Nom : </label>
                <input id="nom" name="nom" type="text" />
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
    </body>
</html>