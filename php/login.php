<?php
include 'connBDD.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];
    if ($user_id != "" && $password != ""){
        $req = $conn->query("SELECT * FROM users WHERE user_id = '$user_id' AND password = '$password' ");
        $rep = $req->fetch();
        if ($rep['user_id'] != false){
            header('Location: Profil.php');
        }
        else{
            echo "Identifiant ou mot de passe incorrect";
        }
    }
}

?>