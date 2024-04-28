<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/Page_Suggestion.css">
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
