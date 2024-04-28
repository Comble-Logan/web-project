<?php
    session_start();
    setlocale(LC_TIME, 'fr_FR');
?>

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

    <?php
        include 'header.php';

        try{	
            //Ouvrir la connexion à la BDD 
            require("connBDD.php"); 			
            $reqSQL= "SELECT name, surname, email, birth_date FROM users where user_id = ?"; 
            //préparer, exécuter la requête et récuperer le résultat
            $reqUser = $conn->prepare($reqSQL);
            $reqUser->execute([$_SESSION['user_id']]);
            $user = $reqUser->fetch(PDO::FETCH_ASSOC);

            $reqSQLMovies= "SELECT m.movie_id, m.name, m.poster FROM vieweds v INNER JOIN movies m ON v.movie_id = m.movie_id WHERE v.user_id = ? ORDER BY v.date DESC LIMIT 6;"; 
            $reqMovies = $conn->prepare($reqSQLMovies);
            $reqMovies->execute([$_SESSION['user_id']]);
            $Movies = $reqMovies->fetchAll(PDO::FETCH_ASSOC);
            //Fermer la connexion
            $conn = null;
        }
        catch(Exception $e){
            die("Erreur : " . $e->getMessage());
        }

        $timestampBirthDate = strtotime($user['birth_date']);
        $birthDate = date('l j F Y', $timestampBirthDate);
   ?>
    
    <main>
        <div class="wrapper">
            <h1>Profil</h1>
            <div class="info-container">
                <h3 class="info-label">Prénom:</h3>
                <span class="info-value"><?php echo $user['name'];?></span>
            </div>
            <div class="info-container">
                <h3 class="info-label">Nom:</h3>
                <span class="info-value"><?php echo $user['surname'];?></span>
            </div>
            <div class="info-container">
                <h3 class="info-label">Adresse Mail:</h3>
                <span class="info-value"><?php echo $user['email'];?></span>
            </div>

            <div class="info-container">
                <h3 class="info-label">Date de naissance</h3>
                <span class="info-value"><?php echo $birthDate;?></span>
            </div>

            <h2>Films Précédemment Réservés :</h2>

            <div class="lastMovies">
                <?php
                    if (count($Movies) > 0) {
                        foreach ($Movies as $movie) {
                            echo "<img src=\"{$movie['poster']}\" alt=\"Films précédemment réservés\">";
                        }
                    } 
                ?>
            </div>

            <br>
            <form action="" method="post">
                <button type="submit" class="btn" name="logout">Deconnexion</button>
            </form>
        </div>
    </main>

    <?php
        if(isset($_POST['logout'])){
            require("logout.php"); 
        }

        include 'footer.php';
    ?>
</body>
</html>