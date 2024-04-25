<?php
// Configuration
$servername = 'localhost';
$username = 'root';
$password = 'root';


try {
    $bdd = new PDO("mysql:host=$servername;dbname=projet", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erreur : '. $e->getMessage();
}

if (isset($_POST['ok']));{
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $birth_date = $_POST['birth_date'];
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $remember = isset($_POST['remember'])? 1 : 0;


    // Insert data into database
    $sql = "INSERT INTO users (username, password, email, birth_date, surname, remember)
            VALUES (:user_id, :password, :email, :birth_date, :surname, :name, :remember)";
    $sql-execute(
        array(
            ":user_id" => $user_id,
            ":password" => $password,
            ":email" => $email,
            ":birth_date" => $birth_date,
            ":surname" => $surname,
            ":name" => $name,
            ":remember" => $remember,
        )
    );
}
?>