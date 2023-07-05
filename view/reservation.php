<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Votre reservation</title>
    <link href="./style.reservation.css" rel="stylesheet">
</head>
<?php session_start()?>
<body>
    <section>

        <form class="form" action="../ctrl/ajoutReservation.php" method="post">
            <div id='titre'>
                <h1>MA <br> RESERVATION</h1>
            </div>
          
          
            <DIV id="corps_form">

                <div>
                    <label for="chambre">Chambre :</label>
                    <input type="text" name="chambre" id="chambre" value="<?php echo $chambre = $_GET['chambre'];?>" readonly>
                    
                </div>
                
                
                <div>
                    <label for="description">Description :</label>
                    <input type="text" name="description" id="description" value="<?php echo $chambre = $_GET['chambre'];?>" readonly>
                    
                </div>

                <div>
                    <!-- readonly -->
                    <label for="prix">Prix :</label>
                    <input type="text" name="prix" id="prix" value="<?php echo $prix = $_GET['prix'];?>" readonly>
                </div>

                <div>
                    <label for="date_debut">Date de début :</label>
                    <input type="int" id="date_debut" name="date_debut" value="<?php echo $_SESSION['DATEDEBUT']?>" required>
                </div>

                <div>
                    <label for="date_fin">Date de fin :</label>
                    <input type="date" id="date_fin" name="date_fin" value="<?php echo $_SESSION['DATEFIN']?>" required>
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