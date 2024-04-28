<?php
    session_start();

	
        //Ouvrir la connexion à la BDD 
        require("connBDD.php"); 	
        $user_email = $_POST['user_id'];
        $password = $_POST['password'];

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $user_id = $_POST['user_id'];
            $password = $_POST['password'];
            if ($user_id != "" && $password != ""){
                $req = $conn->query("SELECT * FROM users WHERE email = '$user_email' AND password = '$password' ");
                $rep = $req->fetch();

                if ($rep){
                    $_SESSION['connected'] = true;
                    $_SESSION['user_id'] = $rep['user_id'];
                    $_SESSION['isAdmin'] = $rep['isAdmin'];
                    header("Location:../index.php");
                }
                else{
                    echo "<p style='color: red;'>Identifiant ou mot de passe incorrect</p>" ;
                }
            }
        }
?>