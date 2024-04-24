<?php
    if(isset($isIndex)){
        $chemin_ML = 'php/Mentions_Legales.php';
        $chemin_CGU = 'php/CGU.php';
        $chemin_CGV = 'php/CGV.php';
        $chemin_PPDP = 'php/PPDP.php';
    } else {
        $chemin_ML = 'Mentions_Legales.php';
        $chemin_CGU = 'CGU.php';
        $chemin_CGV = 'CGV.php';
        $chemin_PPDP = 'PPDP.php';
    }

    // Futur code php pour gérer la date du copyright
    $annee = date('Y');
?>

<footer class="foot">
            <div class="footer-container">
                <div class="footer-contact">
                    <h3> Nous contacter : </h3>
                    <ul>
                        <li> Email : contact@leseptiemeart.com</li>
                        <li> Tel : 03 27 12 48 19</li>
                    </ul>
                </div>

                <div class="footer-information">
                    <h3> Informations : </h3>
                    <ul>
                        <li><a href="<?php echo $chemin_ML; ?>"> Mentions Légales </a></li>
                        <li><a href="<?php echo $chemin_CGU; ?>"> Conditions d'Utilisation du site internet </a></li>
                        <li><a href="<?php echo $chemin_CGV; ?>"> Conditions Générales de Vente </a></li>
                        <li><a href="<?php echo $chemin_PPDP; ?>"> Politique de protection des données personnelles </a></li>
                    </ul>
                </div>

                <div class="footer-copyrights">
                    <p>&copy; 1979 - <?php echo $annee; ?> Le Septième Art. All rights reserved.</p>
                </div>
            </div>
        </footer>