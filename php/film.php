<?
    session_start();
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
    <meta name="Film" content="Page Film">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="science-fiction, cinema, septième, art, films, retro"> <!-- Mots-clés référencement-->
        <meta name="author" content="Audrey Vasseur">
        <link rel="icon" type="image/x-icon" href="../images/logo-final.ico">
        <link rel="stylesheet" type="text/css" href="../css/film.css">
        <title><?php echo $film['name']; ?></title>
    
        <?php
            include 'header.php';
        ?>
    
        <main>
            <div class="contain">
                <!-- Vidéo -->
                <div class="video">  
                    <iframe src="<?php echo $film['trailer']; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen width="100%" height="550px"></iframe>  
                </div>
                <!-- Détails du film -->
                <div class="Tableau">
                    <div class="poster">
                        <img src="<?php echo $film['poster']; ?>" alt="Affiche du film">
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
                            <?php
                                date_default_timezone_set('Europe/Paris');
                                // Obtention de la date actuelle
                                $currentTime = time();

                                // Préparez la requête SQL
                                $request = "SELECT * FROM screenings WHERE date >= CURDATE() AND movie_id = :movie_id ORDER BY date ASC";
                                $req = $conn->prepare($request);
                                $req->execute(['movie_id' => $film['movie_id']]);  // on veut vérifier qu'on soit sur le bon film

                                // On parcourt chaque ligne
                                while ($row = $req->fetch()) {
                                    // Création de l'url de redirection vers la page de réservation correspondante
                                    $url = "Page_Reservation.php?idf=" . $row["movie_id"] . "&ids=" . $row["screening_id"];
                                    
                                    // On vérifie si l'utilisateur est connecté
                                    if (isset($_SESSION['connected']) && $_SESSION['connected'] == true) {
                                        // Si c'est le cas, on redirige vers la page de réservation
                                        echo '<a href="' . $url . '">';
                                    }

                                    echo '<div class="bloc">';
                                    setlocale(LC_TIME, 'fr_FR.utf8','fra'); 
                                    echo strftime("%A %d %B", strtotime($row["date"])) . "<br>";  // affichage du jour 
                                    echo date('H:i', strtotime($row["hourly"])) . "<br>";  // affichage de l'heure (sans les secondes)
                                    echo "Salle " . $row["salle"];  // affichage du numéro de la salle
                                    echo "</div><br>";  

                                    if (isset($_SESSION['connected']) && $_SESSION['connected'] == true) {
                                        echo '</a>';
                                    }else{
                                        header('Location: connexion.php');
                                    }
                                }  
                            ?>
                            <br>
                            
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
