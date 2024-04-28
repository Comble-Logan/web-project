<?php
	if(isset($_SESSION['connected']) && $_SESSION['connected']) { // si un utilisateur est authentifié (session en cours)
		session_unset(); //détruire les variables de sessions
		session_destroy();//détruire la session
		header("Location:../index.php");
	}
?>
