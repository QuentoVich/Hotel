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
    <body>
        <form class="form" action="../C/execute.ctrl.php" method="post" >
            <div class="">
                <label for="prenom">Prénom</label>
                <input id="prenom" name="prenom" type="text" />
            </div>
            <div class="">
                <label for="nom">Nom</label>
                <input id="nom" name="nom" type="text" />
            </div>

            <div class="">
                <label for="sex">Sex</label>
                <input id="sex" name="sex" type="text" />
            </div>
            <input type="submit" id="submit" name="submit" value="Envoyer" />
        </form>
    </body>
</html>