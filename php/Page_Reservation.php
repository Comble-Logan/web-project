<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../css/Page_Reservation.css">
</head>
<body>
    <div class="container3">
        <?php
            include 'header.php';
        ?>
        <main>
            <br>
            <div class="global">
                <div class="container2">
                    <div class="film-details"></div>
                    <img src="../images/Affiches/Affiche-Avatar.jpg" class="image-film" alt="Description de l'image">
                    <h2>Titre du film</h2>
                    <p>Synopsis du film...</p>
                    <p>Durée du film...</p>
                    <p>salle...</p>
                </div>
                <div class="formulaire">
                    <form method="post" action="">
                        <label for="time">Heure :</label>
                        <select id="time" name="time">
                            <option value="14h30">14:30</option>
                            <option value="16h00">16:00</option>
                            <option value="17h30">17:30</option>
                        </select>
                        <br>
                        <label for="status">Tarification :</label>
                        <select id="status" name="status">
                            <option value="5">Étudiant(e)</option>
                            <option value="10">Adulte plein tarif (+14)</option>
                            <option value="3">Enfants (-14)</option>
                        </select>
                        <br>
                        <label for="quantity">Nombre de personnes :</label>
                        <input type="number" id="quantity" name="quantity" min="1" max="10">
                        <br>
                        <button type="submit" name="calculate">Actualiser le total</button>
                        <p>Prix total : 
                        <?php
                            if(isset($_POST['calculate'])){
                                $status = floatval($_POST['status']); // Convertit la chaîne en nombre à virgule flottante
                                $quantity = intval($_POST['quantity']); // Convertit la chaîne en entier
                                echo $status * $quantity;
                            }
                        ?>
                        </p>
                        <button class="bouton" type="submit" onclick="window.location.href='payement'"><a href="../php/Page_paiement.php">PAYEMENT</a></button>
                    </form>
                </div>
            </div>
            <br>
        </main>
        
        <?php
            include 'footer.php';
        ?>
    </div>
</body>
</html>
