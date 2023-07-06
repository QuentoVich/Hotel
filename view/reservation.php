<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Votre reservation</title>
    <link href="./style.reservation.css" rel="stylesheet">
</head>


<header>
<div id="logo">
  <div id="element3">
                <h1>Time <br> to <br> Travel</h1>
            </div> 
</div>
           
   
</header>


<?php session_start() ?>

<body>

    <section>

        <form class="form" action="../ctrl/ajoutReservation.php" method="post">
            <div id='titre'>
                <h1>MA <br> RESERVATION</h1>
            </div>



            <DIV id="corps_form">

            <div class="element_form">
                    <label for="chambre">Chambre :</label>
                    <input type="text" name="chambre" id="chambre" value="<?php echo $chambre = $_GET['chambre']; ?>" readonly>

                </div>


                <div class="element_form">
                    <label for="description">Description :</label>
                    <input type="text" name="description" id="description" value="<?php echo $_GET['emplacement']; ?>" readonly>

                </div>

                <div class="element_form">
                    <label for="prix">Prix par nuit :</label>
                    <input type="text" name="prix_par_jour" id="prix_par_jour" value="<?php echo $_GET['prix']; ?>" readonly>
                </div>

                <div class="element_form">
                    <label for="date_debut">Date de début :</label>
                    <input type="text" id="date_debut" name="date_debut" value="<?php echo $_SESSION['DATEDEBUT']; ?>" readonly>
                </div>

                <div class="element_form">
                    <label for="date_fin">Date de fin :</label>
                    <input type="text" id="date_fin" name="date_fin" value="<?php echo $_SESSION['DATEFIN']; ?>" readonly>
                </div>

                <div class="element_form">
                    <label for="Code_Client">Code client :</label>
                    <input type="int" name="Code_Client" id="Code_Client" required>
                </div>

              


                <input type="hidden" name="id_chambre" value="<?php echo $id_chambre; ?>">

                <input type="submit" id="submit" name="submit" value="Reserver">

            </DIV>
        </form>

    </section>





</body>



</html>