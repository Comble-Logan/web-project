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
        include 'connBDD.php';


        $sql_prenom = "SELECT name FROM users";
        $prenom = $conn->prepare($sql_prenom);
        $prenom->execute();
        $name = $prenom->fetch();

        $sql_nom = "SELECT surname FROM users";
        $nom = $conn->prepare($sql_nom);
        $nom->execute();
        $surname = $nom->fetch();

        $sql_email = "SELECT email FROM users";
        $email = $conn->prepare($sql_email);
        $email->execute();
        $email = $email->fetch();

        $sql_bd = "SELECT birth_date FROM users";
        $bd = $conn->prepare($sql_bd);
        $bd->execute();
        $bd = $bd->fetch();

        session_start();
        $_SESSION['name'] = $name['name'];
        $_SESSION['surname'] = $surname['surname'];
        $_SESSION['email'] = $email['email'];
        $_SESSION['birth-date'] = $bd['birth_date'];
   ?>
    
    <main>
        <div class="wrapper">
            <h1>Profil</h1>
            <div class="info-container">
                <h3 class="info-label">Prénom:</h3>
                <span class="info-value"><?php echo $_SESSION['name'];?></span>
            </div>
            <div class="info-container">
                <h3 class="info-label">Nom:</h3>
                <span class="info-value"><?php echo $_SESSION['surname'];?></span>
            </div>
            <div class="info-container">
                <h3 class="info-label">Adresse Mail:</h3>
                <span class="info-value"><?php echo $_SESSION['email'];?></span>
            </div>

            <div class="info-container">
                <h3 class="info-label">Date de naissance</h3>
                <span class="info-value"><?php echo $_SESSION['birth-date'];?></span>
            </div>

            <h2>Films Réservés :</h2>
            </br><h2>Fimls Précedement Réservés :</h2>

            <br>
            <button type="submit" class="btn" >Changer de Mot de passe</button>
        </div>
    </main>

    <?php
            include 'footer.php';

        ?>
</body>
</html>