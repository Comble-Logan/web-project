<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="index" content="Page d'accueil">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="cinema, septième, art, films, retro"> <!-- Mots-clés référencement-->
        <meta name="author" content="Logan Comble">
        <link rel="icon" type="image/x-icon" href="images/logo-final.ico">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <title>Le Septième Art</title>

        <?php
            $isIndex = true;
            include 'php/header.php';
        ?>
        
        <main class="main">
            <div class="main-container">
                <h1 class="main-titre">Nos films :</h1>

                <a href="php/film.php?id=1" class="film-1"><img src="images/Affiches/Affiche-LaGrandeVadrouille.jpg" alt="Affiche La Grande Vadrouille"></a>
                <a href="php/film.php?id=2" class="film-2"><img src="images/Affiches/Affiche-LaSeptiemeCompagnie.jpg" alt="Affiche La 7ème compagnie"></a>
                <a href="php/film.php?id=3" class="film-3"><img src="images/Affiches/Affiche-Rocky.jpg" alt="Affiche Rocky"></a>
                <a href="php/film.php?id=4" class="film-4"><img src="images/Affiches/Affiche-Starwars.jpg" alt="Affiche Star Wars La Guerre Des Etoiles"></a>
                <a href="php/film.php?id=5" class="film-5"><img src="images/Affiches/Affiche-TheShining.jpg" alt="Affiche The Shining"></a>
                <a href="php/film.php?id=6" class="film-6"><img src="images/Affiches/Affiche-Troie.jpg" alt="Affiche Troie"></a>

                <a href="php/film.php?id=7" class="film-7"><img src="images/Affiches/Affiche-Avatar.jpg" alt="Affiche Avatar"></a>
                <a href="php/film.php?id=8" class="film-8"><img src="images/Affiches/Affiche-Dune.jpg" alt="Affiche Dune (1984)"></a>
                <a href="php/film.php?id=9" class="film-9"><img src="images/Affiches/Affiche-LeSeigneurDesAnneaux.jpg" alt="Affiche Le Seigneur Des Anneaux"></a>
                <a href="php/film.php?id=10" class="film-10"><img src="images/Affiches/Affiche-Spiderman.jpg" alt="Affiche Spiderman (2005)"></a>
                <a href="php/film.php?id=11" class="film-11"><img src="images/Affiches/Affiche-Terminator.jpg" alt="Affiche Terminator"></a>
                <a href="php/film.php?id=12" class="film-12"><img src="images/Affiches/Affiche-RetourVersLeFutur.jpg" alt="Affiche Retour Vers Le Futur"></a>
            </div>
        </main>


        <?php
            include 'php/footer.php';
        ?>
    </body>
</html>
