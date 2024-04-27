<?php 
	session_start(); //Démarrer la session
	//if (!isset($_SESSION['admin']) && !$_SESSION['admin']) { // si l'utilisateur n'est pas authentifié ou n'est pas admin
	//			// => redirection vers la page index
	//	header("Location:../index.php");
	//}
	//si l'utilisateur est un adminstrateur ==> On affiche la page

?>
		
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="index" content="Gestion site">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Logan Comble">
        <link rel="icon" type="image/x-icon" href="../images/logo-final.ico">
        <link rel="stylesheet" type="text/css" href="../css/gestion.css">
        <title>Le Septième Art</title>
        
        <?php
            include 'header.php';
        ?>
		
		<main>

        <h2 class="welcome">Bienvenue sur le panel administrateur !</h2>

		<?php
			try{	
				//Ouvrir la connexion à la BDD 
				require("connBDD.php"); 			
				$reqSQL= "SELECT movie_id, name FROM movies"; 
				//préparer, exécuter la requête et récuperer le résultat
				$reqFilm = $conn->prepare($reqSQL);
				$reqFilm->execute();
				//Fermer la connexion
				$conn = null;
			}
			catch(Exception $e){
				die("Erreur : " . $e->getMessage());
			}

		?>

		<form action="" method="post">
			<fieldset>
				<legend>Ajout d'une nouvelle séance</legend>
				<label>Film :</label>
				<select name="film">
				<?php					
					foreach ($reqFilm as $film) {
						echo "<option value='$film[0]'>$film[1]</option>";
					}
				?>
				</select>
				
				<br><br>
				<label>Date :</label>
				<input type="datetime-local" name="date" required>
				
                <br><br>
				<label>Nombre de places :</label>
				<input type="number" name="NbPlaces" required>

				<br><br>
				<label>Numéro de la salle :</label>
				<input type="number" name="numSalle" required>

                <br><br>
				<input type="submit" name="ajout" value="Ajouter"/>
			</fieldset>
		</form>

		<?php
			if(isset($_POST['ajout'])) { 
				try{
					//Ouvrir la connexion à la BDD 
					require("connBDD.php"); 	
					$movieId= $_POST['film'];//récuperer l'id du film
					$datetime= $_POST['date']; // récupère la date de la séance
					$places= $_POST['NbPlaces'];//récuperer le nombre de place de la séance
					$salle= $_POST['numSalle'];

					$dateParts = explode('T', $datetime);
					$date = $dateParts[0];
					$time = $dateParts[1];
											
					$reqSQL= "INSERT INTO screenings (movie_id, date, hourly, remaining_tickets, spectators, salle)
							VALUES (:id, :date, :hourly, :remaining_tickets, :spectators, :salle)";
					//préparer et exécuter la requête
					$req = $conn->prepare($reqSQL);


					$req->execute(array(
										':id' => $movieId,
										':date' => $date,
										':hourly' => $time,
										':remaining_tickets' => $places,
										':spectators' => 0,
										'salle' => $salle));
					$conn = null;//Fermer la connexion
					header("Location:gestion.php");
				}                
				catch(Exception $e){
					die("Erreur : " . $e->getMessage());
				}
			}				
		?>

        <br><br>

		<?php
			try{	
				//Ouvrir la connexion à la BDD 
				require("connBDD.php"); 			
				$reqSQL= "SELECT s.screening_id, m.name, s.date, s.hourly, s.salle FROM screenings s JOIN movies m ON s.movie_id = m.movie_id;"; 
				//préparer, exécuter la requête et récuperer le résultat
				$reqSeance = $conn->prepare($reqSQL);
				$reqSeance->execute();
				//Fermer la connexion
				$conn = null;
			}
			catch(Exception $e){
				die("Erreur : " . $e->getMessage());
			}

		?>

        <form action="" method="post">
			<fieldset>
				<legend>Suppression d'une séance</legend>
				<label>Séance à supprimer :</label>
				<select name="seance">

				<?php

					date_default_timezone_set('Europe/Paris');
               		// Obtention du timestamp actuel
                	$currentTime = time();
                	foreach ($reqSeance as $Seance) {
                    	// Fusion date et heure
                    	$datetime = $Seance[2] . ' ' . $Seance[3];
                    	// Conversion en timestamp
                    	$seanceTimestamp = strtotime($datetime);

                    	// Si la séance n'a pas encore eu lieu
                    	if ($seanceTimestamp > $currentTime) {
								echo "<option value='$Seance[0]'>$Seance[1] - $Seance[2] - $Seance[3] - Salle n°$Seance[4]</option>";
						}
              	    }
            	?>
				</select>

                <br><br>
				<input type="submit" name="suppression" value="Supprimer"/>
			</fieldset>
		</form>
		<br>

		<?php

			if(isset($_POST['suppression'])) {
				try{
					//Ouvrir la connexion à la BDD 
					require("connBDD.php"); 	
					$screeningId= $_POST['seance'];//récuperer l'id de la séance

					$reqSQL= "SELECT spectators FROM screenings WHERE screening_id = ?"; 
					//préparer, exécuter la requête et récuperer le résultat
					$reqSeanceSpectators = $conn->prepare($reqSQL);
					$reqSeanceSpectators->execute([$screeningId]);
					$spectators = $reqSeanceSpectators->fetch(PDO::FETCH_COLUMN);

					if($spectators !== false && $spectators == 0){					
						$reqSQL= "DELETE FROM screenings WHERE screening_id = ?";
						//préparer et exécuter la requête
						$req = $conn->prepare($reqSQL);
						$req->execute([$screeningId]);
						$conn = null;//Fermer la connexion
						header("Location:gestion.php");
					} else{
						echo "<p style='color: red;'>Séance non supprimable car certaines places ont déjà été vendus !</p>" ;
						$conn = null;//Fermer la connexion
					}
				}                
				catch(Exception $e){
					die("Erreur : " . $e->getMessage());
				}
			}				
		?>

        <br>
	
		</main>

		<?php
            include 'footer.php';
        ?>
	 </body>	
</html>	
