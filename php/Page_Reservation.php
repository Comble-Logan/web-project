<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/Page_Reservation.css">
</head>
<body class="container">
    <header class="header">
        <nav class="nav">
            <img src="../images/logo.png" alt="Logo nav" class="nav-logo">
            <h1 class="nav-name"> Le Septième Art </h1>
            <ul>
                <li class="nav-acceuil-page"> <a href="#">Accueil</a> </li>
                <li class="nav-contact-page"> <a href="#">Contact</a> </li>
                <li class="nav-connect-page"> <a href="#">Connexion / Inscription</a> </li>
            </ul>
        </nav>

    </header> 
    <main>
        <div class="global">
            <button class="bouton2" type="submit" onclick="window.location.href='retour'"><a href="../php/dune.html">RETOUR</a></button>
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
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-contact">
                <h3> Nous contacter : </h3>
                <ul>
                    <li> Email : contact@leseptiemeart.com</li>
                    <li> Tel : 03 27 12 48 19</li>
                </ul>
            </div>

            <div class="footer-information">
                <h3> Informations : </h3>
                <ul>
                    <li><a href="html/Mentions_Legales.html"> Mentions Légales </a></li>
                    <li><a href="html/CGU.html"> Conditions d'Utilisation du site internet </a></li>
                    <li><a href="html/CGV.html"> Conditions Générales de Vente </a></li>
                    <li><a href="html/PPDP.html"> Politique de protection des données personnelles </a></li>
                </ul>
            </div>

            <div class="footer-copyrights">
                <p>© 1979 - 2024 Le Septième Art. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
