<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <link href="./style.connexion.css" rel="stylesheet">
</head>

<body>

    <form class="form" action="../ctrl/execute.php" method="POST">
        <div id="titre">
            <h1>Connexion</h1>
        </div>
        <DIV id = "corps_form">
        <div class="element">
            <label for="id">Identifiant : </label>
            <input id="id" name="id" type="text" placeholder="Entrez votre identifiant" />
        </div>
        <div class="element">
            <label for="mdp">Mot de passe : </label>
            <input id="mdp" name="mdp" type="password" placeholder="Entrez votre mot de passe" reqired= />
        </div>
        <input type="submit" id="submit" name="submit" value="Envoyer" />
        </DIV>
    </form>
</body>

</html>