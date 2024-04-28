<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="profil" content="Contact">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Lucas Monnehay">
    <link rel="icon" type="image/x-icon" href="../images/logo-final.ico">
    <link rel="stylesheet" type="text/css" href="../css/Page_Suggestion.css">
    <title>Le Septième Art</title>

    <?php
        include 'header.php';
    ?>

    <main>
        <div class="container2">
            <h1>Nous contacter <br></h1>
            <form>
                <label for="nom">Votre nom:</label><br>
                <input type="text" id="nom" name="nom"><br>
                <label for="email">Votre email:</label><br>
                <input type="email" id="email" name="email"><br>
                <label for="message">votre message:</label><br>
                <textarea id="message" name="message"></textarea><br>
                <input type="submit" value="Envoyer">
            </form>
        </div>
    </main>
    <?php
        include 'footer.php';
        ?>
</body>
</html>
