<?php
    if(isset($isIndex)){
        // Chemins CSS
        $chemin_header_css = 'css/headerIndex.css';
        $chemin_footer_css = 'css/footer.css';
        // Chemin image 
        $chemin_image = 'images/logo.png';
        // Chemins redirections
        $chemin_accueil = '#';
        $chemin_contact = 'php/Page_Suggestion.php';
        $chemin_profil = 'php/Profil.php';
        $chemin_gestion = 'php/gestion.php';
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
        $chemin_gestion = 'gestion.php';
        $chemin_profil = 'Profil.php';
        $chemin_session = 'connexion.php';}
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
                <?php
                    if (isset($_SESSION['connected'])) {
                        if ($_SESSION['isAdmin'] == 0) {
                            echo "<li class=\"nav-connect-page\"> <a href=\"$chemin_profil\">Profil</a> </li>";
                        } else {
                            echo "<li class=\"nav-connect-page\"> <a href=\"$chemin_gestion\">Panel Admin</a> </li>";
                        }
                    } else {
                        echo "<li class=\"nav-connect-page\"> <a href=\"$chemin_session\">Connexion</a> </li>";
                    }
                ?>
            </ul>
        </nav>
    </header>