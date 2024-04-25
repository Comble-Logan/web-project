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
            $isIndex = true;
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
                        <img src="../images/Affiches/Affiche-Dune.jpg" alt="Affiche du film">
                    </div>
                </div>
                <div class="info-1">
                    <h2>DUNE</h2>
                        <p> 
                            L’histoire se déroule dans un futur lointain, en l’an 10191. L’Épice, une substance permettant de voyager
                            dans l’espace, est la plus convoitée de l’univers et ne se trouve qu’en un seul endroit : Arrakis, aussi
                            appelée “Dune”. La famille Atréides est envoyée sur cette planète afin de remplacer les Harkonnens. Paul,
                            le fils du duc, et sa mère Jessica rencontrent les Fremen, les habitants indigènes de Dune qui attendent
                            un messie. Paul pourrait-il être celui-ci ?
                        </p>
                </div>
                <br>
                <div class="info-2">
                    <h3>Réalisateur :</h3>
                        <p>David Lynch</p>
                    <br>
                    <h3>Acteurs :</h3>
                        <p>Kyle MacLachlan, Patrick Stewart, Sean Young, Sting, Francesca Annis</p>
                        <br>
                    <h3>Durée du film : 2h17</h3>
                </div>
            
                <!-- Calendrier des séances -->
                <div class="calendrier">
                <section id="calendar">
                    <h2>Calendrier des séances</h2>
                    <table>
                        <tr>
                            <td>Lundi : 17:15<br>(fin 19:40)<br>Salle 8</td>
                            <td>Mardi : 10:45<br>(fin 12:55)<br>Salle 10</td>
                            <td>Mardi : 18:15<br>(fin 20:35)<br>Salle 2</td>
                            <td>Mercredi : 16:00<br>(fin 18:30)<br>Salle 5</td>
                        </tr>
                        <tr>
                            <td>Vendredi : 16:00<br>(fin 18:30)<br>Salle 1</td>
                            <td>Samedi : 10:45<br>(fin 12:55)<br>Salle 4</td>
                            <td>Samedi : 18:15<br>(fin 20:35)<br>Salle 1</td>
                            <td>Dimanche : 15:00<br>(fin 17:20)<br>Salle 5</td>

                        </tr>
                    </table> 
                </section>
                </div>
                <br>
            </div>       

        </main>
        <?php
            $isIndex = true;
            include 'php/footer.php';
        ?>
    </body>
</html>