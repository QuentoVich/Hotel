<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exemple de formulaire</title>
        <style media="screen">
            div {
                display: block;
                margin: 1rem;
            }
            form {
                width: 400px;
                margin: 100px auto;
                padding: 2rem;
                box-shadow: 1px 1px 12px 3px #CCC;
            }
            form label {
                display: inline-block;
                width: 100px;
            }
        </style>
    </head>

    <h1> Réservez votre chambre de rêve</h1>
    <body>

        <form class="form" action="../C/execute.ctrl.php" method="post" >
            <div class="">
                <label for="id">Identifiant :</label>
                <input id="id" name="id" type="int" />
            </div>
            <div class="">
                <label for="mot de passe">Mot de passe</label>
                <input id="mdp" name="mdp" type="int" />
            </div>

            <input type="submit" id="submit" name="submit" value="Envoyer" />
        </form>
    </body>
</html>