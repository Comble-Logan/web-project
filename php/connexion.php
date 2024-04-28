<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="profil" content="Mentions légales">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Esteban DA-SILVA">
    <link rel="icon" type="image/x-icon" href="../images/logo-final.ico">
    <link rel="stylesheet" type="text/css" href="../css/connexion.css">
    <title>Le Septième Art</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <?php
        include 'header.php';
    ?>

    <main>
        <div class="wrapper">
            <form action="login.php" method="POST">
                <h1>Connexion</h1>
                <div class="input-box">
                <label for="user_id"></label>
                    <input type="text" id="user_id" name="user_id" placeholder="Identifiant" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <label for="password"></label>
                    <input type="password" id="password" name="password" placeholder="Mot de passe" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <button type="submit" class="btn" name="login">Se connecter</button>

                <div class="inscrire">
                    <p><a href="../php/Inscription.php">S'inscrire</a></p>
                </div>
            </form>
        </div>
    </form>
    </main>

    <?php
            include 'footer.php';
        ?>

</body>
</html>