<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Connexion</title>
        <link src ="./style.connexion.css" rel="stylesheet">

    </head>
    <body>
        <form class="form" action="..\BDD_exemple\C\execute.ctrl.php" method="get" >
            <div class="">
                <label for="id">Identifiant</label>
                <input id="id" name="id" type="text" />
            </div>
            <div class="">
                <label for="mdp">Mot de passe</label>
                <input id="mdp" name="mdp" type="text" />
            </div>

    
            <input type="submit" id="submit" name="submit" value="Envoyer" />
        </form>
    </body>
</html>