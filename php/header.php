<?php
    // Futur code lié a l'affichage du connexion ou profil dans le nav

    if(isset($isIndex)){
        $chemin_image = '/images/logo.png';
    } else {
        $chemin_image = '../images/logo.png';
    }
?>

    <link rel="stylesheet" type="text/css" href="/css/header.css">
</head>
<body class="container">
    <header id="head">
        <nav class="nav">
            <img src="<?php echo $chemin_image; ?>" alt="Logo nav" class="nav-logo">
            <h1 class="nav-name"> Le Septième Art </h1>
            <ul>
                <li class="nav-acceuil-page"> <a href="#">Accueil</a> </li>
                <li class="nav-contact-page"> <a href="#">Contact</a> </li>
                <li class="nav-connect-page"> <a href="../web-project/HTML/connexion.html">Connexion / Inscription</a> </li>
            </ul>
        </nav>
    </header>