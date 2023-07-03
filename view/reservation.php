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
    </body>
</html>