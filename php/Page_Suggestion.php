<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/Page_Suggestion.css">
</head>

<body>
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
        <div class="container">
            <h1>Votre avis sur notre cinéma <br></h1>
            <form>
                <label for="nom">Votre nom:</label><br>
                <input type="text" id="nom" name="nom"><br>
                <label for="email">Votre email:</label><br>
                <input type="email" id="email" name="email"><br>
                <label for="avis">Votre avis:</label><br>
                <textarea id="avis" name="avis"></textarea><br>
                <label for="suggestions">Vos suggestions:</label><br>
                <textarea id="suggestions" name="suggestions"></textarea><br>
                <input type="submit" value="Envoyer">
            </form>
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
                <p>&copy; 1979 - 2024 Le Septième Art. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
