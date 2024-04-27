<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/Page_Suggestion.css">
    <?php
        include 'header.php';
    ?>

    <main>
        <div class="container2">
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
    <?php
        include 'footer.php';
        ?>
</body>
</html>
