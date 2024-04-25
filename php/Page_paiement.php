<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/Page_paiement.css">
    <?php
        include 'header.php';
    ?>

        
    <main>
        
    <div class="container2">
        <div class="paiement">
            <div class="commentaire">
            </div>
            <h2>PAIEMENT</h2>
            <form>
                <label for="numero">Numéro sur la carte:</label><br>
                <input type="text" id="numero" name="numero"><br>
                <label for="nom">Nom sur la carte:</label><br>
                <input type="text" id="nom" name="nom"><br>
                <label for="expiration">Date d'expiration:</label><br>
                <input type="text" id="expiration" name="expiration"><br>
                <label for="cvv">CVV / CVD:</label><br>
                <input type="text" id="cvv" name="cvv"><br>
                <div class="conditions">
                    <input type="checkbox" id="conditions" name="conditions">
                    <label for="conditions">J'accepte les termes et conditions suivants : Termes et conditions</label>
                </div>
                <button class="bouton" type="submit" onclick="window.location.href='account'"><a href="../php/Profil.html">PAYER ET CONFIRMER MA COMMANDE</a></button>
                <button class="bouton2" type="submit" onclick="window.location.href='retour'"><a href="../php/dune.html">RETOUR</a></button>
            </form>
        </div>
        <div class="carte">
            <img src="../images/cb.jpg" alt="" width="100%">
            
        </div>
        
    </div>

    <?php
        include 'footer.php';
        ?>
    </main>
    

</body>
</html>
