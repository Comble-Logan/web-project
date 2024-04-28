<?php
    session_start();
    if (!isset($_SESSION['connected']) || !$_SESSION['connected'] || !isset($_SESSION['Prix']) || !isset($_SESSION['NBplace']) || !isset($_GET['idf']) || !isset($_GET['ids'])) { 
        // => redirection vers la page index
        header("Location:../index.php");
    }
    $price = $_SESSION['Prix'];
    $NBplace = $_SESSION['NBplace'];
    $user_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/Page_paiement.css">
    <?php
        include 'header.php';
    ?>

        
    <main>
        <?php
            $id_film = $_GET['idf'];
            $id_seance = $_GET['ids'];
         ?>
    <div class="container2">
        <div class="paiement">
            <div class="commentaire">
            </div>
            <h2>PAIEMENT</h2>
            <form method="post" action="">
                <label for="numero">Numéro sur la carte:</label><br>
                <input type="text" id="numero" name="numero" required><br>
                <label for="nom">Nom sur la carte:</label><br>
                <input type="text" id="nom" name="nom" required><br>
                <label for="expiration">Date d'expiration:</label><br>
                <input type="text" id="expiration" name="expiration" required><br>
                <label for="cvv">CVV / CVD:</label><br>
                <input type="text" id="cvv" name="cvv" required><br>
                <div class="conditions">
                    <input type="checkbox" id="conditions" name="conditions" required>
                    <label for="conditions">J'accepte les termes et conditions suivants : Termes et conditions</label>
                </div>
                <input type="submit" name="account" value="Payer et confirmer la commande">
                
                
            </form>
            <form method="post" action="">
                <br>
            <input type="submit" name="reservation" value="retour">
            </form>
        </div>
        <?php
        if(isset($_POST["reservation"])){
            header("location:Page_Reservation.php?idf=$id_film&ids=$id_seance");
        }
        if(isset($_POST["account"])){
            try{
                require('connBDD.php');
                
                $reqSQL1 = "SELECT movie_id, date FROM screenings WHERE screening_id = ?";
                $reqSQL2 = $conn->prepare($reqSQL1);
                $reqSQL2->execute([$id_seance]);
                $seance = $reqSQL2->fetch();

                $date = $seance['date'];
                $movie_id = $seance['movie_id'];

                $reqSQL= "INSERT INTO vieweds (user_id, movie_id, date, purchased_tickets)
                            VALUES (:user_id, :movie_id, :date, :purchased_tickets)";
                    //préparer et exécuter la requête
                    $req = $conn->prepare($reqSQL);


                    $req->execute(array(
                                        ':user_id' => $user_id,
                                        ':movie_id' => $movie_id,
                                        ':date' => $date,
                                        ':purchased_tickets' => $NBplace));

                $reqSQL3 = "UPDATE screenings SET remaining_tickets = remaining_tickets - ? WHERE screening_id = ?";
                $reqSQL4 = $conn->prepare($reqSQL3);
                $reqSQL4->execute([$NBplace,$id_seance]);
                
  
                $conn = null; 

                header('location:profil.php');
            }
            catch(Exception $e){
                die("Erreur : " . $e->getMessage());
            }
        }
        ?>
        <div class="carte">
            <br>
            <img src="../images/cb.jpg" alt="" width="100%">
            
        </div>
        
    </div>


    </main>
    <?php
        include 'footer.php';
        ?>

</body>
</html>
