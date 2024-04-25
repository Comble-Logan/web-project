<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="profil" content="Mentions légales">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Esteban DA-SILVA">
    <link rel="icon" type="image/x-icon" href="../images/logo-final.ico">
    <link rel="stylesheet" type="text/css" href="../css/profil.css">
    <title>Le Septième Art</title>
</head>
<body>
    <?php
        include 'header.php';
    ?>
    
    <main>
        <div class="wrapper">
            <h1>Profil</h1>
            <div class="info-container">
                <h3 class="info-label">Prénom:</h3>
                <span class="info-value">...</span>
            </div>
            <div class="info-container">
                <h3 class="info-label">Nom:</h3>
                <span class="info-value">...</span>
            </div>
            <div class="info-container">
                <h3 class="info-label">Adresse Mail:</h3>
                <span class="info-value">...</span>
            </div>
            <h2>Films Réservés :</h2>
                <a href="#" class="film-3"><img src="../images/Affiches/Affiche-Rocky.jpg" alt="Affiche Rocky"></a>
            <h2>Fimls Précedement Réservés :</h2>
                <a href="#" class="film-1"><img src="images/Affiches/Affiche-LaGrandeVadrouille.jpg" alt="Affiche La Grande Vadrouille"></a>
                <a href="#" class="film-2"><img src="images/Affiches/Affiche-LaSeptiemeCompagnie.jpg" alt="Affiche La 7ème compagnie"></a>
            
            <br>
            <button type="submit" class="btn">Changer de Mot de passe</button>
        </div>
    </main>

    <?php
            include 'footer.php';
        ?>

</body>
</html>