<?php
    require 'connBDD.php';

    // Récupération de l'ID du film depuis l'URL ou une autre source
    $film_id = $_GET['id'];

    if (!isset($_GET['id'])) {
        die('ID du film non spécifié');
    }

    // Récupération des détails du film depuis la base de données
    $req = $conn->prepare("SELECT * FROM movies WHERE movie_id = ?");
    $req->execute([$film_id]);
    $film = $req->fetch(PDO::FETCH_ASSOC);
?>




<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8">
    <meta name="Film" content="Page Dune">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="star, wars, science-fiction, cinema, septième, art, films, retro"> <!-- Mots-clés référencement-->
        <meta name="author" content="Audrey Vasseur">
        <link rel="icon" type="image/x-icon" href="../images/logo-final.ico">
        <link rel="stylesheet" type="text/css" href="../css/film.css">
        <title>Dune</title>
    </head>
    
        <?php
            include 'header.php';
        ?>
    
        <main>
            <div class="contain">
                <!-- Vidéo -->
                <div class="video">  
                    <video autoplay muted loop>
                        <iframe width="853" height="480" src="https://www.youtube.com/embed/04aw2ymZedw" title="Dune (1984) Bande-annonce française VF" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>   
                    </video>
                </div>
                <!-- Détails du film -->
                <div class="Tableau">
                    <div class="poster">
                        <img src="<?php echo $film['affiche']; ?>" alt="Affiche du film">
                    </div>
                </div>
                <div class="info-1">
                    <h2><?php echo $film['name']; ?></h2>
                        <p><?php echo $film['synopsis']; ?></p>
                </div>
                <br>
                <div class="info-2">
                    <h3>Réalisateur :</h3>
                        <p><?php echo $film['directors']; ?></p>
                    <br>
                    <h3>Acteurs :</h3>
                        <p><?php echo $film['actors']; ?></p>
                        <br>
                    <h3>Durée du film : <?php echo $film['duration']; ?></h3>
                </div>
            
                
                <!-- Calendrier des séances -->
                <div class="calendrier">
                    <section id="calendar">
                        <h2>Calendrier des séances</h2>
                        <div class="seance">
                            <div class="bloc">Lundi : 17:15<br>(fin 19:40)<br>Salle 8</div>
                            <div class="bloc">Mardi : 10:45<br>(fin 12:55)<br>Salle 10</div>
                            <div class="bloc">Mardi : 18:15<br>(fin 20:35)<br>Salle 2</div>
                            <div class="bloc">Mercredi : 16:00<br>(fin 18:30)<br>Salle 5</div>
                            <div class="bloc">Vendredi : 16:00<br>(fin 18:30)<br>Salle 1</div>
                            <div class="bloc">Samedi : 10:45<br>(fin 12:55)<br>Salle 4</div>
                            <div class="bloc">Samedi : 18:15<br>(fin 20:35)<br>Salle 1</div>
                            <div class="bloc">Dimanche : 15:00<br>(fin 17:20)<br>Salle 5</div>
                        </div>
                    </section>
                </div>
            </div>       

        </main>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>