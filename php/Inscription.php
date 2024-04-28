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
            <form action="submit.php" method="post">
                <h1>Inscription</h1>
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

                <div class="input-box">
                    <label for="email"></label>
                    <input type="text" id="email" name="email" placeholder="Email" required>
                </div>

                <div class="input-box">
                    <label for="birth_date"></label>
                    <input type="date" id="birth_date" name="birth_date" placeholder="birth-date" required>
                </div>

                <div class="input-box">
                    <label for="name"></label>
                    <input type="text" id="name" name="name" placeholder="Name">
                </div>

                <div class="input-box">
                    <label for="surname"></label>
                    <input type="text" id="surname" name="surname" placeholder="Surname">
                </div>

                <button type="submit" value="M'inscrire" class="btn" name="ok">S'inscrire</button>
</form>
    </main>


    <?php
            include 'footer.php';
        ?>

</body>
</html>