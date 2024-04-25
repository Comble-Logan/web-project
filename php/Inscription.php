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
</head>
<body>
    <?php
        include 'header.php';
    ?>
    
    <main>
        <div class="wrapper">
            <form action="submit.php" method="post">
                <h1>Inscription</h1>
                <div for="user_id" class="input-box">
                    <input type="text" placeholder="Identifiant"required>
                    <i class='bx bxs-user'></i>
                </div>
                <div for="password" class="input-box">
                    <input type="password" placeholder="Mot de passe"required>
                    <i class='bx bxs-lock-alt'></i>
                </div>

                <div for="email" class="input-box">
                    <input type="text" placeholder="email"required>
                </div>

                <div for="birth_date" class="input-box">
                    <input type="date" placeholder="birth-date"required>
                </div>

                <div for="name" class="input-box">
                    <input type="text" placeholder="Name">
                </div>

                <div for="surname" class="input-box">
                    <input type="text" placeholder="Surname">
                </div>

                <div class="remember">
                    <label><input type="checkbox">Se rappeler de moi</label>
                </div>

                <button type="submit" value="M'inscrire" class="btn" name="ok">S'inscrire</button>

            </form>
        </div>
    </form>
    </main>


    <?php
            include 'footer.php';
        ?>

</body>
</html>