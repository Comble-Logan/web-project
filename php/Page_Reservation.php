<?php
    session_start();
    if (!isset($_SESSION['connected']) || !$_SESSION['connected'] || !isset($_GET['idf']) || !isset($_GET['ids'])) { 
        // => redirection vers la page index
        header("Location:../index.php");
    }

    $id_film = $_GET['idf'];
    $id_seance = $_GET['ids'];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    

    
    <link rel="stylesheet" type="text/css" href="../css/Page_Reservation.css">
        <?php
            include 'header.php';
            
        ?>
        <main>
            <br>
            <div class="global">
                <div class="container2">
                    <div class="film-details"></div>
                    <?php 
                    
                    try{
                        require('connBDD.php');
                        $reqSQL = "SELECT name, synopsis, duration, poster FROM movies WHERE movie_id = ?";
                        $reqSQL2 = $conn->prepare($reqSQL);
                        $reqSQL2->execute([$id_film]);
                        $film = $reqSQL2->fetch();

                        $reqSQL3 = "SELECT date, hourly, remaining_tickets, salle FROM screenings WHERE screening_id = ?";
                        $reqSQL4 = $conn->prepare($reqSQL3);
                        $reqSQL4->execute([$id_seance]);
                        $seance = $reqSQL4->fetch();
                        $conn = null; 
                    }
                    catch(Exception $e){
                        die("Erreur : " . $e->getMessage());
                    }
                    ?>
                    <pre> <img src="<?php echo($film['poster']) ?>" class="image-film" alt="Description de l'image"> </pre> 
                    <pre> <h2><?php echo($film['name']) ?></h2></pre> 
                    <p>&ensp;&ensp; <?php echo($film['synopsis']) ?></p>
                    <pre>  Durée :<?php echo($film['duration']) ?></pre>
                    <pre>  Numéro de salle : <?php echo( $seance['salle']) ?></pre>
                    
                </div>
                <div class="formulaire">
                    <form method="post" action="">
                    <p>date : <?php echo( $seance['date']) ?></p>
                    <p>heure : <?php echo( $seance['hourly']) ?></p>
                         <br>
                        <label for="status">Tarification :</label>
                        <select id="status" name="status">
                            <option value="5">Étudiant(e)</option>
                            <option value="10">Adulte plein tarif (+14)</option>
                            <option value="3">Enfants (-14)</option>
                        </select>
                        <br>
                        <label for="quantity">Nombre de personnes :</label>
                        <input type="number" id="quantity" name="quantity" min="1" max="100" required>
                        <br>
                        <button type="submit" name="calculate">Actualiser le total</button>
                        <p>Prix total : 
                        <?php
                            if(isset($_POST['calculate'])){
                                $status = floatval($_POST['status']); // Convertit la chaîne en nombre à virgule flottante
                                $quantity = intval($_POST['quantity']); // Convertit la chaîne en entier
                                $price = $status * $quantity;
                                echo $price;
                            }
                        ?>
                        </p>
                        <input type="submit" name="paiement" value="paiement"/>
                    </form>
                    <?php
                    if(isset($_POST["paiement"])){
                        $status = floatval($_POST['status']); // Convertit la chaîne en nombre à virgule flottante
                        $quantity = intval($_POST['quantity']); // Convertit la chaîne en entier
                        $price = $status * $quantity;
                        $NBplace = $_POST["quantity"];
                        if($NBplace< $seance["remaining_tickets"]){
                            $_SESSION["NBplace"] = $NBplace;
                            $_SESSION["Prix"] = $price;
                            header("location:Page_paiement.php?idf=$id_film&ids=$id_seance");

                        }
                        else{
                            echo ("<p style='color: red;'>Le nombre de place est trop élevés face au nombre place restantes</p>") ;
                        }
                    }
                    ?>
                </div>
            </div>
            <br>
        </main>
        
        <?php
            include 'footer.php';
        ?>
   
</body>
</html>
