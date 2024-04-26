<?php
    // Futur code lié a l'affichage du connexion ou profil dans le nav

    if(isset($isIndex)){
        // Chemins CSS
        $chemin_header_css = 'css/headerIndex.css';
        $chemin_footer_css = 'css/footer.css';
        // Chemin image 
        $chemin_image = 'images/logo.png';
        // Chemins redirections
        $chemin_accueil = '#';
        $chemin_contact = 'php/Page_Suggestion.php';
        $chemin_session = 'php/connexion.php';
        
    } else {
        // Chemins CSS
        $chemin_header_css = '../css/header.css';
        $chemin_footer_css = '../css/footer.css';
        // Chemin image 
        $chemin_image = '../images/logo.png';
        // Chemins redirections
        $chemin_accueil = '../index.php';
        $chemin_contact = 'Page_Suggestion.php';
        $chemin_session = 'connexion.php';
    }
?>

    <link rel="stylesheet" type="text/css" href="<?php echo $chemin_header_css; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $chemin_footer_css; ?>">
</head>
<body class="container">
    <header id="head">
        <nav class="nav">
            <img src="<?php echo $chemin_image; ?>" alt="Logo nav" class="nav-logo">
            <h1 class="nav-name"> Le Septième Art </h1>
            <ul>
                <li class="nav-acceuil-page"> <a href="<?php echo $chemin_accueil; ?>">Accueil</a> </li>
                <li class="nav-contact-page"> <a href="<?php echo $chemin_contact; ?>">Contact</a> </li>
                <li class="nav-connect-page"> <a href="<?php echo $chemin_session; ?>">Connexion / Inscription</a> </li>
            </ul>
        </nav>
    </header>