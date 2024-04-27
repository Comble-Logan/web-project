<!DOCTYPE html>
<html lang="en">
<head>
    
<link rel="stylesheet" type="text/css" href="../css/Page_Reservation.css">

<div class="container3">
<?php
        include 'header.php';
    ?>
    <main>
        <div class="global">
            
        <div class="container2">
            <div class="film-details"></div>
                <img src="../images/Affiches/Affiche-Avatar.jpg" class="image-film" alt="Description de l'image">
            
                <h2>Titre du film</h2>
                <p>Synopsis du film...</p>
                <p>Durée du film...</p>
            </div>
            <div class="formulaire">
            <form>
                <label for="time">Heure :</label>
                <select id="time" name="time">
                    <option value="14h30">14:30</option>
                    <option value="16h00">16:00</option>
                    <option value="17h30">17:30</option>
                </select>
                <br>
                <label for="status">Tarification :</label>
                <select id="status" name="status">
                    <option value="student">Étudiant(e)</option>
                    <option value="adult">Adulte plein tarif (+14)</option>
                    <option value="child">Enfants (-14)</option>
                </select>
                <br>
                <label for="quantity">Nombre de personnes :</label>
                <input type="number" id="quantity" name="quantity" min="1" max="10">
    
                <p>Prix total : ...</p>
    
                <button class="bouton" type="submit" onclick="window.location.href='payement'"><a href="../php/Page_paiement.php">PAYEMENT</a></button>
            </form>
            </div>
        </div>
    </div>
    </main>

        <?php
        include 'footer.php';
        ?>

</div>
 
</body>
</html>
